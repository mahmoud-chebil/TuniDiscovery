<?php

namespace App\Controller;

use App\Repository\EquipementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipementController extends AbstractController
{

    /**
     * @Route("/", name="product_indexfff")
     */
    public function index(EquipementRepository $equipementRepository): Response
    {
        $qrCode = null;
        return $this->render('equipement/index.html.twig', [
            'products' => $equipementRepository->findAll(),'qrCode' => $qrCode
        ]);
    }
}
