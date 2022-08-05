<?php

namespace App\Controller;

use App\Entity\Dishes;
use App\Form\DishType;
use App\Repository\DishesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dish", name="dish.")
 */
class DishControlllerController extends AbstractController
{
    /**
     * @Route("/", name="view")
     */
    public function index(DishesRepository $dr): Response
    {
        $dishes = $dr->findAll();
        return $this->render('dish_controlller/index.html.twig', [
            'dishes' => $dishes,
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request, ManagerRegistry $doctrine):Response
    {
        $dish = new Dishes();
        $dishTypeForm = $this->createForm(DishType::class,$dish);
        $dishTypeForm->handleRequest($request);
        if($dishTypeForm->isSubmitted()){
            $imageFile = $dishTypeForm->get("Attachment")->getData();

            if($imageFile){
                $new_file_name = md5(uniqid()) . "." . $imageFile->getClientOriginalExtension();
            
                $imageFile->move(
                    $this->getParameter('img_directory'),
                    $new_file_name
                );
            }

            $dish->setImage($new_file_name);

            $em = $doctrine->getManager();
            $em->persist($dish);
            $em->flush();
            return $this->redirect($this->generateUrl("dish.view"));
        }

        return $this->render('dish_controlller/create.html.twig',[
            "dishTypeForm" => $dishTypeForm->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(DishesRepository $dr, int $id, ManagerRegistry $doctrine):Response
    {
        $dish = $dr->find($id);

        $em = $doctrine->getManager();
        $em->remove($dish);
        $em->flush();

        $this->addFlash("success", "Dish deleted successfully.");
        return $this->redirect($this->generateUrl("dish.view"));
    }

    /**
     * @Route("view_img/{id}", name="view_img")
     */
    public function view_img(Dishes $dish)
    {
        return $this->render('dish_controlller/view_img.html.twig',[
            "dish" => $dish
        ]);
    }

    /**
     * @Route("/view_cheap_dishes", name="view_cheap_dishes")
     */
    public function view_cheap_dishes(DishesRepository $dr)
    {
        $dishes = $dr->getCheapDishes();
        return $this->render('dish_controlller/index.html.twig', [
            'dishes' => $dishes,
        ]);
    }
}
