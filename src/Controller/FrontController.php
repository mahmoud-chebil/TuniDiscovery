<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/affichefront", name="affichefront")
     */
    public function index(): Response
    {
        return $this->render('reclamation/affichefront.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/front", name="front")
     */
    public function fromulaire(): Response
    {
        return $this->render('front/base.front.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
