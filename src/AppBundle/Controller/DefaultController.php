<?php

namespace AppBundle\Controller;

use AppBundle\Form\BlogPost;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use Symfony\Component\Form\FormBuilderInterface;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig');
    }

    public function guestbookhpAction(Request $request)
    {
        return $this->render('base.html.twig');
    }

    public function loggedinAction(Request $request)
    {

        // create a task and give it some dummy data for this example
        $Name = new Post();
        $Name->setName('Write a blog post');



        $form = $this->createForm(BlogPost::class);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $Name->setName($form->get('Name')->getData());
            $Name->setMail($form->get('Mail')->getData());
            $Name->setNachricht($form->get('Nachricht')->getData());
            $Name = $em->merge($Name);
            $em->persist($Name);

            $em->flush();

            return $this->redirectToRoute('task_success',array('Nachricht'=>$Name->getNachricht(), 'Mail'=>$Name->getMail(), 'Name'=>$Name->getName()));
        }

        return $this->render('gaestebuch/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function sucsessAction( $Nachricht,$Mail,$Name){


       //return  $request->request->get('category', 'default category');
       /* $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Post');
           $Post = $repository->findAll();*/


        //echo end ($Post);

/*
        $widgetEntity = new WidgetEntity();
        $em->persist($widgetEntity);
        $em->flush();
        $widgetEntity->getId();
        //$doctrine_record_object->id*/

        /*echo"<pre>";
        var_dump($Nachricht);
        var_dump($Mail);
        var_dump($Name);
        die();*/

        //Id($Id);



        /*if (!$Post) {
            throw $this->createNotFoundException(
                'No product found for id '.$Id
            );
        }*/
        return $this->render('gaestebuch/formdone.html.twig', array('Nachricht'=>$Nachricht, 'Mail'=>$Mail, 'Name'=>$Name));




    }


}
