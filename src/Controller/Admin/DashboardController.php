<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Dishes;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    /**
     * @Route("/admin", name="admin")
     */
    /*public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(DishesCrudController::class)->generateUrl());
    }*/

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('Menukarte');
        yield MenuItem::linkToCrud('Dishes','fa fa-cube', Dishes::class);
        yield MenuItem::linkToCrud('Category','fa fa-tasks', Category::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
      $this->adminUrlGenerator = $adminUrlGenerator;
    }
  
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
      $url = $this->adminUrlGenerator
          ->setController(DishesCrudController::class)
          //->setAction('edit')
          //->setEntityId(1)
          ->generateUrl();
      
      //$routeBuilder = $this->get(CrudUrlGenerator::class)->build();
      //$url = $routeBuilder->setController(ConferenceCrudController::class)->generateUrl();
  
        return $this->redirect($url);
        //return parent::index(); 
    }
}
