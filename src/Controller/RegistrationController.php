<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/reg", name="app_registration")
     */
    public function index(Request $request, UserPasswordHasherInterface $passEncoder, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $regForm = $this->createFormBuilder()
        ->add('username',TextType::class,[
            'required' => true
        ])
        ->add('password',RepeatedType::class,[
            'type' => PasswordType::class,
            'required' => true,
            'first_options' => ['label' => 'Password'],
            'second_options' => ['label' => 'Confirm Password']
        ])
        ->add("Register", SubmitType::class)
        ->getForm();

        $regForm->handleRequest($request);
        if($regForm->isSubmitted()){
           $data = $regForm->getData();
           $user = new User();
           $user->setUsername($data['username']);
           $user->setPassword(
                $passEncoder->hashPassword($user,$data['password'])
           );

           //validation
           $user->setRawPassword($data['password']);
           $errors = $validator->validate($user);
           if(count($errors) > 0){
                return $this->render('registration/index.html.twig', [
                    'regForm' => $regForm->createView(),
                    'errors' => $errors
                ]);
           }else{
                $em = $doctrine->getManager();
                $em->persist($user);
                $em->flush(); 
           }

           return $this->redirect($this->generateUrl("app_home"));
        }

        return $this->render('registration/index.html.twig', [
            'regForm' => $regForm->createView(),
            'errors' => null
        ]);
    }
}
