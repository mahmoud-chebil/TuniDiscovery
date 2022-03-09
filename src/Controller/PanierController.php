<?php

namespace App\Controller;

use App\Repository\EquipementRepository;
use App\Repository\ProductRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panierf", name="panier_index")
     */
    public function index(SessionInterface $session, ProductRepository $productRepository){
        $panier = $session->get('panier', []);
        $panierInfo = [];

        $total = 0;
        Foreach ($panier as $id => $quantite) {
            $equipement = $productRepository->find($id);
            $panierInfo[] = [


                'Equipement' => $productRepository->find($id),
                'quantite' => $quantite
            ];
            $total += $equipement->getPrice() * $quantite;
        }


        return $this->render('panier/index.html.twig',compact("panierInfo", "total"));

    }

    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id, SessionInterface $session){
        $panier = $session->get('panier',[]);
        if(!empty(($panier[$id]))) {
            $panier[$id]++;
        }  else {  $panier[$id] = 1;}

        $session->set('panier', $panier);

        return $this->redirectToRoute("panier_index");

    }

    /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $session){
      $panier = $session->get('panier', []);

      if(!empty($panier[$id])) {
          unset($panier[$id]);
      }

      $session->set('panier',$panier);
        $this->addFlash(
            'info',
            'Panier Vider Avec Succés'
        );

      return$this->redirectToRoute("panier_index");
    }
    /**
     * @Route("/panier/command/{total}", name="panier_commande")
     */
public function GoCommande($total){

    return $this->redirectToRoute("commande_index",
    ['t'=>$total]);
 }

}
