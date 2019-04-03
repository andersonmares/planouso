<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\UsuarioPessoaFisica;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UsuarioPessoaFisicaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dsEmail', TextType::class, array(
                    'label' => 'E-mail'
                )
            )
            ->add('nuDdd', TextType::class, array(
                'label' => 'DDD'
            ))
            ->add('nuTelefone', TextType::class, array(
                'label' => 'Telefone'
            ))->add('usuario', CollectionType::class, array(
                'label' => false,
                'entry_options' => array('label' => false),
                'entry_type' => UsuarioType::class,
                'entry_options' => array('entityManager' => $options['entityManager']),
                'allow_add' => true
            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => UsuarioPessoaFisica::class,
            'entityManager' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_adminbundle_usuariopessoafisica';
    }


}
