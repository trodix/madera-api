<?php

namespace App\Controller;

use App\Service\Mailing;
use App\Entity\Quotation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $isSuccess = $mailing->sendQuotationEmail($quotation);
        
        if(!$isSuccess) {
            return new JsonResponse(
                ["message" => "Can't send a quotation email without modules"],
                Response::HTTP_NOT_ACCEPTABLE
            );
        }

        return new Response();
    }
}
