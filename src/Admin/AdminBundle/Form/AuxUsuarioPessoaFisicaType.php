<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\AuxUsuarioPessoaFisica;
use Admin\AdminBundle\Entity\PerfilAcesso;
use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Repository\DepartamentoRepository;
use Admin\AdminBundle\Repository\PerfilAcessoRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuxUsuarioPessoaFisicaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dsEmail', EmailType::class, array(
                'label' => 'E-mail',
                'attr' => array('maxlength' => 250)
            ))
            ->add('nuTelefone', TextType::class, array(
                'label' => 'Telefone',
                'attr' => array(
                    'data-inputmask' => "'mask': (999) 999-9999'",
                    'data-mask' => null
                )
            ))
            ->add('coPerfilAcesso', EntityType::class, array(
                'label' => 'Perfil de Acesso',
                'required' => true,
                'multiple' => false,
                'class' => PerfilAcesso::class,
                'query_builder' => function (PerfilAcessoRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->where('p.stRegistroAtivo = :stregistroativo')
                        ->setParameter('stregistroativo', 'S')
                        ->orderBy('p.dsPerfilAcesso', 'ASC');
                },
                'choice_label' => 'dsPerfilAcesso',
                'placeholder' => 'Selecione o Perfil'
            ))->add('coDepartamento', EntityType::class, array(
                'label' => 'Departamento',
                'multiple' => false,
                'required' => false,
                'class' => Departamento::class,
                'query_builder' =>  function (DepartamentoRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.stRegistroAtivo = :stregistroativo')
                        ->setParameter('stregistroativo', 'S')
                        ->orderBy('a.dsDepartamento', 'ASC');
                },
                'choice_label' => 'dsDepartamento',
                'placeholder' => 'Selecione o Departamento'

            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => AuxUsuarioPessoaFisica::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'usuario';
    }

}
