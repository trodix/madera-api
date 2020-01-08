<?php

namespace App\Service;

use App\Entity\Quotation;
use App\Service\PDFGenerator;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class Mailing {

  protected $mailer;
  protected $environment;
  protected $pdfGenerator;

  public function __construct(KernelInterface $kernel, MailerInterface $mailer, PDFGenerator $pdfGenerator)
  {
    $this->mailer = $mailer;
    $this->environment = $kernel->getEnvironment();
    $this->pdfGenerator = $pdfGenerator;
  }

  public function sendQuotationEmail(Quotation $quotation, String $from = 'madera.l4pc@gmail.com')
  {
    if(!$quotation->getModules()->isEmpty()) {

      $pdfStream = $this->pdfGenerator->generateQuotationFile($quotation);
      $fileName = $quotation->getProject()->getReference().".pdf";
  
      // *** For debuging ***
      $to = 'customer.l4pc@gmail.com';
      // *** End ***
  
      // $to = $quotation->getProject()->getCustomer()->getEmail();
  
      $email = (new TemplatedEmail())
        ->from(new Address($from))
        ->to(new Address($to))
        ->subject('Votre nouveau devis')
        ->htmlTemplate('emails/quotation.html.twig')
        ->context([
          'quotation' => $quotation
        ])
        ->attach($pdfStream, $fileName, 'application/pdf')
      ;
  
      $sentEmail = $this->mailer->send($email);

    } else {
      $httpResponse = new JsonResponse(
        ["message" => "Can't send a quotation email without modules"],
        Response::HTTP_NOT_ACCEPTABLE
      );

      $httpResponse->send();
    }
  }

}