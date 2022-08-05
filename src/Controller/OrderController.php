<?php

namespace App\Controller;

use App\Entity\Dishes;
use App\Entity\Order;
use App\Repository\OrderRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="app_order")
     */
    public function index(OrderRepository $or): Response
    {
        $orders = $or->findBy(array(
            "tables" => 'table1'
        ));

        return $this->render('order/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/order/{id}", name="order_dish")
     */ 
    public function order(Dishes $dish, ManagerRegistry $doctrine ):Response
    {
        $order = new Order();
        $order->setName($dish->getName());
        $order->setStatus("open");
        $order->setPrice($dish->getPrice());
        $order->setTables("table1");
        $order->setOrderId($dish->getId());

        $em = $doctrine->getManager();
        $em->persist($order);
        $em->flush();

        $this->addFlash("success", $order->getName() . " was added to order");
        return $this->redirect($this->generateUrl("app_menu"));
    }

    /**
     * @Route("/status/{id},{status}", name="status")
     */
    public function status(OrderRepository $or, ManagerRegistry $doctrine, int $id, String $status)
    {
        $em = $doctrine->getManager();
        $order = $or->find($id);
        $order->setStatus($status);
        $em->flush();

        return $this->redirect($this->generateUrl('app_order'));
    }

    /**
     * @Route("/order_delete/{id}", name="order_delete")
     */
    public function delete(OrderRepository $or, int $id, ManagerRegistry $doctrine):Response
    {
        $order = $or->find($id);

        $em = $doctrine->getManager();
        $em->remove($order);
        $em->flush();
        return $this->redirect($this->generateUrl("app_order"));
    }
}
