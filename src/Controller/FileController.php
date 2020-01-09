<?php

namespace App\Controller;

use App\Entity\Quotation;
use App\Service\PDFGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $pdfStream = $pdfGenerator->generateQuotationFile($quotation);
        if(false === $pdfStream) {
            return new JsonResponse(
                ["message" => "Invalid quotation"],
                Response::HTTP_NOT_ACCEPTABLE
            );
        }

        return new Response($pdfStream, Response::HTTP_OK, [
            'Content-Type' => 'application/pdf'
        ]);
    }
}
