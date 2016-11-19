<?php
/**
 * Created by PhpStorm.
 * User: lilikovac
 * Date: 14.11.16
 * Time: 22:12
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserLoggin extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('_username')
            ->add('_password', PasswordType::class)
            ->add('Login', SubmitType::class, array('label' => 'Login', 'attr'=>array('class'=>'btn btn-primary')));
        ;
    }
}


