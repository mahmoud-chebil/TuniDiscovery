<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/afficheback", name="afficheback")
     */
    public function index(): Response
    {
        return $this->render('reclamation/afficheback.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }

    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back/base.back.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }



}
