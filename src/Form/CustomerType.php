<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array('attr' => array('class' => 'form-control', 'autocomplete'=> 'false')))
            ->add('lastname', null, array('attr' => array('class' => 'form-control', 'autocomplete'=> 'false')))
            ->add('email', null, array('attr' => array('class' => 'form-control', 'autocomplete'=> 'false')))
            ->add('phone', null, array('attr' => array('class' => 'form-control', 'autocomplete'=> 'false')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
