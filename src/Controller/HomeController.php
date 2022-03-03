<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/profile/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
     /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->render('backtemplate/virtual-reality.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    
}
