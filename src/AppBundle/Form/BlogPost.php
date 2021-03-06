<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogPost extends AbstractType {
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
    ->add('Name', TextType::class,array(
      'attr' => array('class'=>'form-control','onblur'=>'validateName("blog_post_Name")')))
    ->add('Mail', EmailType::class,array(
        'attr' => array('class'=>'form-control','onblur'=>'validateEmail("blog_post_Mail")')))
    ->add('Nachricht', TextareaType::class,array(
        'attr' => array('class'=>'form-control')))
    ->add('save', SubmitType::class, array('label' => 'Nachricht abschicken', 'attr'=>array('class'=>'btn btn-primary')))
;
}
}
?>

