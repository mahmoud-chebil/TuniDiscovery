<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Entity\Product;
use App\Form\OrderType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{


    /**
     * @Route("/cart", name="cart")
     */
    public function index(SessionInterface $session,ProductRepository $productRepository): Response
    {

        $cart=$session->get("cart");
        if(!$cart){
            return $this->render('cart/test.html.twig', [
                "items"=>0,
                "total"=>"0"
            ]);
        }else {
           $cartWithData=[];
            foreach ($cart as $id=>$quantity){
                $cartWithData[]=[
                    "product"=>$productRepository->find($id),
                    "quantity"=>$quantity
                ];
            }
            $total=0;
            foreach ($cartWithData as $item){
                $total+=$item["product"]->getPrice()*$item["quantity"];
            }
            return $this->render('cart/test.html.twig', [
                "items"=>$cartWithData,
                "total"=>$total
            ]);
        }

    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session)
    {
        $cart=$session->get('cart',[]);

        if(!empty($cart[$id])){
            $cart[$id]++;

        }else {
            $cart[$id]=1;

        }

        $session->set("cart",$cart);
        return $this->redirectToRoute('product_front_index');

    }

    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session)
    {

        $cart=$session->get('cart',[]);

        if(!empty($cart[$id])){
           unset($cart[$id]);

        }
        $session->set("cart",$cart);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/success", name="successPayment")
     */
    public function success(SessionInterface $session,ProductRepository $productRepository,Request $request): Response
    {
        $order = new Order();
        $entityManager = $this->getDoctrine()->getManager();
        $cart=$session->get("cart");
        if(!$cart){
            return $this->render('cart/test.html.twig', [
                "items"=>0,
                "total"=>"0"
            ]);
        }else {
            $cartWithData=[];
            foreach ($cart as $id=>$quantity){
                $cartWithData[]=[
                    "product"=>$productRepository->find($id),
                    "quantity"=>$quantity,

                ];
            }
            $total=0;
            foreach ($cartWithData as $item){
                $total+=$item["product"]->getPrice()*$item["quantity"];
                $orderDetail=new OrderDetail();
                $orderDetail->setPayment("stripe");
                $orderDetail->setProduct($item["product"]);
                $orderDetail->setQuantity($item["quantity"]);
                $orderDetail->setOrderr($order);
                $entityManager->persist($orderDetail);

            }

            $form = $this->createForm(OrderType::class, $order);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $order->setStatus(1);
                $date=new \DateTime();
                $order->setCheckoutDate($date->format('Y-m-d H:i:s'));
                $order->setUserId(1);
                $order->setTotalPrice($total);

                $entityManager->persist($order);
                $entityManager->flush();
                $session->remove("cart");
                return $this->redirectToRoute('done');
            }


            return $this->render('cart/test1.html.twig', [
                "items"=>$cartWithData,
                "total"=>$total,
                'order' => $order,
                'form' => $form->createView(),
            ]);
        }}
    /**
     * @Route("/success2", name="successPayment2")
     */
    public function success2(SessionInterface $session,ProductRepository $productRepository,Request $request): Response
    {
        $order = new Order();
        $entityManager = $this->getDoctrine()->getManager();
        $cart=$session->get("cart");
        if(!$cart){
            return $this->render('cart/test.html.twig', [
                "items"=>0,
                "total"=>"0"
            ]);
        }else {
            $cartWithData=[];
            foreach ($cart as $id=>$quantity){
                $cartWithData[]=[
                    "product"=>$productRepository->find($id),
                    "quantity"=>$quantity,

                ];
            }
            $total=0;
            foreach ($cartWithData as $item){
                $total+=$item["product"]->getPrice()*$item["quantity"];
                $orderDetail=new OrderDetail();
                $orderDetail->setPayment("pay on delivery");
                $orderDetail->setProduct($item["product"]);
                $orderDetail->setQuantity($item["quantity"]);
                $orderDetail->setOrderr($order);
                $entityManager->persist($orderDetail);

            }

            $form = $this->createForm(OrderType::class, $order);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $order->setStatus(0);
                $date=new \DateTime();
                $order->setCheckoutDate($date->format('Y-m-d H:i:s'));
                $order->setUserId(1);
                $order->setTotalPrice($total);

                $entityManager->persist($order);
                $entityManager->flush();
                $session->remove("cart");
                return $this->redirectToRoute('done');
            }


            return $this->render('cart/test1.html.twig', [
                "items"=>$cartWithData,
                "total"=>$total,
                'order' => $order,
                'form' => $form->createView(),
            ]);
        }}
        /**
         * @Route("/error", name="errorPayment")
         */
        public function error(SessionInterface $session,ProductRepository $productRepository): Response
    {
        $cart=$session->get("cart");
        if(!$cart){
            return $this->render('cart/test2.html.twig', [
                "items"=>0,
                "total"=>"0"
            ]);
        }else {
            $cartWithData=[];
            foreach ($cart as $id=>$quantity){
                $cartWithData[]=[
                    "product"=>$productRepository->find($id),
                    "quantity"=>$quantity
                ];
            }
            $total=0;
            foreach ($cartWithData as $item){
                $total+=$item["product"]->getPrice()*$item["quantity"];
            }
            return $this->render('cart/test.html.twig', [
                "items"=>$cartWithData,
                "total"=>$total
            ]);
        }
    }

    /**
     * @Route("/done", name="done")
     */
    public function done(SessionInterface $session,ProductRepository $productRepository): Response
    {


            return $this->render('cart/test3.html.twig', [
                "items"=>0,
                "total"=>"0"
            ]);

    }

}


