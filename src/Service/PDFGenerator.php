<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;
use App\Entity\Quotation;
use chillerlan\QRCode\QRCode;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;

class PDFGenerator {

  protected $templating;

  public function __construct(Environment $templating)
  {
    $this->templating = $templating;
  }

  /**
   * Generate a quotation as PDF
   * @var Quotation $quotation
   * @var bool $render Render the file in a new Response
   * @return string|Response|bool the PDF file as string or a new response with the pdf attached
   */
  public function generateQuotationFile(Quotation $quotation, bool $render = false)
  {

    if(false === $this->isValidQuotation($quotation)) return false;

    $options = new Options();
    $options->setIsRemoteEnabled(true);

    $dompdf = new Dompdf($options);

    $qrcode = (new QRCode)->render($quotation->getProject()->getReference());
    

    $html = $this->templating->render('pdf/quotation.html.twig', [
        'quotation' => $quotation,
        'qrcode' => $qrcode
    ]);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    if($render) {
      $filename = 'devis-'.$quotation->getProject()->getReference();
      return $dompdf->stream($filename.'.pdf', [
        "Attachment" => false
      ]);
    }
    
    return $dompdf->output();;

  }

  private function isValidQuotation(Quotation $quotation): ?bool {
    
    if(
      $quotation !== null
      && $quotation->getProject() !== null 
      && $quotation->getProject()->getUsers()->count() > 0
      && $quotation->getProject()->getUsers()[0]->getSites()->count() > 0
      && $quotation->getModules()->count() > 0
      ) {
      return true;
    }

    return false;
  }

}