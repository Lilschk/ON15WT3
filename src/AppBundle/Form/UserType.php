<?php
/**
 * Created by PhpStorm.
 * User: lilikovac
 * Date: 10.11.16
 * Time: 13:16
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,array(
                'attr' => array('class'=>'form-control','onblur'=>'validateEmail("user_email")')))
            ->add('username', TextType::class,array(
                'attr' => array('class'=>'form-control','onblur'=>'validateName("user_username")')))
            ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options'  => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repeat Password')))
            ->add('save', SubmitType::class, array('label' => 'Registrieren', 'attr'=>array('class'=>'btn btn-primary')));

    }

}