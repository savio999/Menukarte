<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\DishesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="app_menu")
     */
    public function index(DishesRepository $dr,CategoryRepository $cr): Response
    {
        $dishes = $dr->findAll();
        $categories = $cr->findAll('name');
       
        return $this->render('menu/index.html.twig', [
            'dishes' => $dishes,
            'categories' => $categories
        ]);
    }
}
