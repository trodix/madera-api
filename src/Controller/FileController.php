<?php

namespace App\Controller;

use App\Entity\Quotation;
use App\Service\PDFGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/v1/file")
 */
class FileController extends AbstractController
{
    /**
     * Return the specified quotation as .pdf file
     * @Route("/quotation/{id}", name="quotation", methods={"GET"})
     */
    public function generateQuotationPdf(PDFGenerator $pdfGenerator, Quotation $quotation)
    {
        return new Response($pdfGenerator->generateQuotationFile($quotation), Response::HTTP_OK, [
            'Content-Type' => 'application/pdf'
        ]);
    }
}
