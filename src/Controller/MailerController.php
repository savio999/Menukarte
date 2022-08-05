<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function sendEmail(MailerInterface $mailer, Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('Msg', TextareaType::class,[
                'attr' => ['rows' => 5],
                'label' => 'Message'
            ])
            ->add('Contact',SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-danger float-end'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted()){
            $fields = $form->getData();
            $msg = $fields['Msg'];        

            $email = (new TemplatedEmail())
            ->to('savio.menezes19@gmail.com')
            ->from('mailer@menukarte.com')
            ->subject('New Message')
            ->htmlTemplate('mailer/mail.html.twig')
            ->context([
                "msg" => $msg
            ]);
    
            $mailer->send($email);
            $this->addFlash("success","Message sent successfully.");
        }

        return $this->render('mailer/index.html.twig',[
            "contact_form" => $form->createView()
        ]);
        
    }
}
