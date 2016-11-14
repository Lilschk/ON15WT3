<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogPost extends AbstractType {
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
    ->add('Name', TextType::class)
    ->add('Mail', EmailType::class, array('data' => 'abcdef'))
    ->add('Nachricht', TextareaType::class, array(
        'attr' => array('class' => 'tinymce')))
    ->add('save', SubmitType::class, array('label' => 'Nachricht abschicken'))
;
}
}
?>

