<?php

namespace ContainerHfisquD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FGHdC7CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FGHdC7C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FGHdC7C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\DishesCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\DishesCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\DishesCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\DishesCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\DishesCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\DishesCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\DishesCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\DishesCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DishesCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DishesCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\DishControlllerController::create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\DishControlllerController::delete' => ['privates', '.service_locator.yitK_L3', 'get_ServiceLocator_YitKL3Service', true],
            'App\\Controller\\DishControlllerController::index' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\DishControlllerController::view_cheap_dishes' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\DishControlllerController::view_img' => ['privates', '.service_locator.eBp3G8C', 'get_ServiceLocator_EBp3G8CService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\ListeController::delete' => ['privates', '.service_locator.63psbP1', 'get_ServiceLocator_63psbP1Service', true],
            'App\\Controller\\ListeController::edit' => ['privates', '.service_locator.63psbP1', 'get_ServiceLocator_63psbP1Service', true],
            'App\\Controller\\ListeController::index' => ['privates', '.service_locator.dNWStjf', 'get_ServiceLocator_DNWStjfService', true],
            'App\\Controller\\ListeController::new' => ['privates', '.service_locator.dNWStjf', 'get_ServiceLocator_DNWStjfService', true],
            'App\\Controller\\ListeController::show' => ['privates', '.service_locator.hKLna5N', 'get_ServiceLocator_HKLna5NService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\MenuController::index' => ['privates', '.service_locator.M28AYu0', 'get_ServiceLocator_M28AYu0Service', true],
            'App\\Controller\\OrderController::delete' => ['privates', '.service_locator.E4Lms0m', 'get_ServiceLocator_E4Lms0mService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.YBB6IGp', 'get_ServiceLocator_YBB6IGpService', true],
            'App\\Controller\\OrderController::order' => ['privates', '.service_locator.QaiGT.j', 'get_ServiceLocator_QaiGT_JService', true],
            'App\\Controller\\OrderController::status' => ['privates', '.service_locator.E4Lms0m', 'get_ServiceLocator_E4Lms0mService', true],
            'App\\Controller\\RegistrationController::index' => ['privates', '.service_locator.BNwQwAj', 'get_ServiceLocator_BNwQwAjService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CategoryCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\DishesCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\DishesCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\DishesCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\DishesCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\DishesCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\DishesCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\DishesCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\DishesCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\DishesCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DishesCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DishesCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\DishesCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\DishControlllerController:create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\DishControlllerController:delete' => ['privates', '.service_locator.yitK_L3', 'get_ServiceLocator_YitKL3Service', true],
            'App\\Controller\\DishControlllerController:index' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\DishControlllerController:view_cheap_dishes' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\DishControlllerController:view_img' => ['privates', '.service_locator.eBp3G8C', 'get_ServiceLocator_EBp3G8CService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.r6n4w.5', 'get_ServiceLocator_R6n4w_5Service', true],
            'App\\Controller\\ListeController:delete' => ['privates', '.service_locator.63psbP1', 'get_ServiceLocator_63psbP1Service', true],
            'App\\Controller\\ListeController:edit' => ['privates', '.service_locator.63psbP1', 'get_ServiceLocator_63psbP1Service', true],
            'App\\Controller\\ListeController:index' => ['privates', '.service_locator.dNWStjf', 'get_ServiceLocator_DNWStjfService', true],
            'App\\Controller\\ListeController:new' => ['privates', '.service_locator.dNWStjf', 'get_ServiceLocator_DNWStjfService', true],
            'App\\Controller\\ListeController:show' => ['privates', '.service_locator.hKLna5N', 'get_ServiceLocator_HKLna5NService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\MenuController:index' => ['privates', '.service_locator.M28AYu0', 'get_ServiceLocator_M28AYu0Service', true],
            'App\\Controller\\OrderController:delete' => ['privates', '.service_locator.E4Lms0m', 'get_ServiceLocator_E4Lms0mService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.YBB6IGp', 'get_ServiceLocator_YBB6IGpService', true],
            'App\\Controller\\OrderController:order' => ['privates', '.service_locator.QaiGT.j', 'get_ServiceLocator_QaiGT_JService', true],
            'App\\Controller\\OrderController:status' => ['privates', '.service_locator.E4Lms0m', 'get_ServiceLocator_E4Lms0mService', true],
            'App\\Controller\\RegistrationController:index' => ['privates', '.service_locator.BNwQwAj', 'get_ServiceLocator_BNwQwAjService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\DishesCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\DishesCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\DishesCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\DishesCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\DishesCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\DishesCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\DishesCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\DishesCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\DishesCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\DishesCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController::delete' => '?',
            'App\\Controller\\Admin\\DishesCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\DishesCrudController::detail' => '?',
            'App\\Controller\\Admin\\DishesCrudController::edit' => '?',
            'App\\Controller\\Admin\\DishesCrudController::index' => '?',
            'App\\Controller\\Admin\\DishesCrudController::new' => '?',
            'App\\Controller\\Admin\\DishesCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\DishesCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\DishesCrudController::updateEntity' => '?',
            'App\\Controller\\DishControlllerController::create' => '?',
            'App\\Controller\\DishControlllerController::delete' => '?',
            'App\\Controller\\DishControlllerController::index' => '?',
            'App\\Controller\\DishControlllerController::view_cheap_dishes' => '?',
            'App\\Controller\\DishControlllerController::view_img' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ListeController::delete' => '?',
            'App\\Controller\\ListeController::edit' => '?',
            'App\\Controller\\ListeController::index' => '?',
            'App\\Controller\\ListeController::new' => '?',
            'App\\Controller\\ListeController::show' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\MenuController::index' => '?',
            'App\\Controller\\OrderController::delete' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\OrderController::order' => '?',
            'App\\Controller\\OrderController::status' => '?',
            'App\\Controller\\RegistrationController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\DishesCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\DishesCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\DishesCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\DishesCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\DishesCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\DishesCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\DishesCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\DishesCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\DishesCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\DishesCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\DishesCrudController:delete' => '?',
            'App\\Controller\\Admin\\DishesCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\DishesCrudController:detail' => '?',
            'App\\Controller\\Admin\\DishesCrudController:edit' => '?',
            'App\\Controller\\Admin\\DishesCrudController:index' => '?',
            'App\\Controller\\Admin\\DishesCrudController:new' => '?',
            'App\\Controller\\Admin\\DishesCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\DishesCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\DishesCrudController:updateEntity' => '?',
            'App\\Controller\\DishControlllerController:create' => '?',
            'App\\Controller\\DishControlllerController:delete' => '?',
            'App\\Controller\\DishControlllerController:index' => '?',
            'App\\Controller\\DishControlllerController:view_cheap_dishes' => '?',
            'App\\Controller\\DishControlllerController:view_img' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ListeController:delete' => '?',
            'App\\Controller\\ListeController:edit' => '?',
            'App\\Controller\\ListeController:index' => '?',
            'App\\Controller\\ListeController:new' => '?',
            'App\\Controller\\ListeController:show' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\MenuController:index' => '?',
            'App\\Controller\\OrderController:delete' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\OrderController:order' => '?',
            'App\\Controller\\OrderController:status' => '?',
            'App\\Controller\\RegistrationController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
