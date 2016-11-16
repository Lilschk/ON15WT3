<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\BlogPost;
use AppBundle\Form\UserType;
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
        //$em = $this->getDoctrine()->getManager();
        //$id = $em->lastInsertId();
        return $this->render('gaestebuch/formdone.html.twig', array('Nachricht'=>$Nachricht, 'Mail'=>$Mail, 'Name'=>$Name));
    }

    public function showAction(Request $request){
        $deleteForms = [];

        $events = $this->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->findAll();
        foreach ($events as $event){array_push($deleteForms,$this->createDeleteForm($event)->createView());
        }
        return $this->render('gaestebuch/eintraege.html.twig',array(
            'events' => $events, 'deleteForms'=> $deleteForms));

    }

    /**
     * Deletes a Apps entity.
     *
     * @Route("applicationdelete/{id}", name="application_delete")

     */
    public function deleteAction(Request $request, Post $post){
        $deleteForm = $this->createDeleteForm($post);
        $deleteForm->handleRequest($request);

        if($deleteForm->isSubmitted() && $deleteForm->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }

        return $this->redirectToRoute("guestbook_einträgezeigen");
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param Apps $apps The Apps entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function editAction($id, Request $request)
    {

        $form = $this->createForm(BlogPost::class);
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Post')->find($id);
        $form->handleRequest($request);



        if ($form->isValid())
        {
            $post->setName($form->get('Name')->getData());
            $post->setMail($form->get('Mail')->getData());
            $post->setNachricht($form->get('Nachricht')->getData());

            $em->flush();

            return $this->redirectToRoute('guestbook_einträgezeigen');


    }
        return $this->render('gaestebuch/UpdateEintraege.html.twig', array('post'=>$post,
            'form' => $form->createView(),));
    }}







