<?php

namespace Utilisateurs\UtilisateursBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name_company', null, array(
            'required' => false));
        $builder->add('type_account', 'choice', array(
            'choices' => array(
                'user' => 'Utilisateur',
                'dev' => 'Développeur')));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'bms_user_registration';
    }
}