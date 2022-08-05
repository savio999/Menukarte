<?php

namespace App\Controller;

use App\Repository\DishesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(DishesRepository $dr): Response
    {
        $dishes = $dr->findAll();
        $selected = array_rand($dishes,2);

        return $this->render('home/index.html.twig', [
            'dish1' => $dishes[$selected[0]],
            'dish2' => $dishes[$selected[1]]
        ]);
    }

    /**
     * @Route("/start", name="start")
     */
    public function start(): Response
    {
        return $this->render('home/start.html.twig');
    }
}
