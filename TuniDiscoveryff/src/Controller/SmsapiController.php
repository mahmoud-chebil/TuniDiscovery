<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SmsapiController extends AbstractController
{
    /**
     * @Route("/smsapi", name="app_smsapi")
     */
    public function index(): Response
    {
        return $this->render('smsapi/index.html.twig', [
            'controller_name' => 'SmsapiController',
        ]);
    }
}
