<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{

    // public function register(Request $request, UserPasswordEncoderInterface $encoder)
    // {
    //     $em = $this->getDoctrine()->getManager();
        
    //     $username = $request->request->get('_username');
    //     $password = $request->request->get('_password');
        
    //     $user = new User();
    //     $user
    //         ->setEmail($username)
    //         ->setPassword(
    //             $encoder->encodePassword($user, $password)
    //         )
    //     ;
    //     $em->persist($user);
    //     $em->flush();
    //     return new Response(sprintf('User %s successfully created', $user->getUsername()));
    // }

    // public function login(Request $request)
    // {
    //     return $this->render('auth/index.html.twig');
    // }
    
}
