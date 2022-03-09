<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAsmaController extends AbstractController
{
    /**
     * @Route("/adminAsma", name="adminAsma")
     */
    public function index(): Response
    {
        return $this->render('adminAsma/base.back.html.twig', [
            'controller_name' => 'AdminAsmaController',
        ]);
    }

}
