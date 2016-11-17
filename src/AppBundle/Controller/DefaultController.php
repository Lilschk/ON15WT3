<?php

namespace AppBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use AppBundle\Form\BlogPost;

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

        $post = new Post();
        $form = $this->createForm(BlogPost::class, $post);
        $em = $this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $post->setName($form->get('Name')->getData());
            $post->setMail($form->get('Mail')->getData());
            $post->setNachricht($form->get('Nachricht')->getData());

            $post = $em->merge($post);
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('task_success',array('id'=>$post->getId()));
        }

        return $this->render('gaestebuch/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function sucsessAction( $id){

        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Post')->find($id);


        return $this->render('gaestebuch/formdone.html.twig', array('post'=>$post));
    }

    public function showAction(Request $request){
        $deleteForms = [];

        $posts = $this->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->findAll();
        foreach ($posts as $post){array_push($deleteForms,$this->createDeleteForm($post)->createView());
        }
        return $this->render('gaestebuch/eintraege.html.twig',array(
            'posts' => $posts, 'deleteForms'=> $deleteForms));

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







