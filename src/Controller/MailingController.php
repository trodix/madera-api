<?php

namespace App\Controller;

use App\Service\Mailing;
use App\Entity\Quotation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/v1/mailing")
 */
class MailingController extends AbstractController
{
    /**
     * Send the specified quotation to the customer
     * @Route("/quotation/{id}", name="quotation_mailing", methods={"GET"})
     */
    public function sendQuotationToCustomer(Mailing $mailing, Quotation $quotation)
    {
        $mailing->sendQuotationEmail($quotation);
        
        return new Response();
    }
}
