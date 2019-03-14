<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Repository\DepartamentoRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RedeProgramaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('departamento', EntityType::class, array(
            'label' => 'Departamento',
            'class' => Departamento::class,
            'query_builder' =>  function (DepartamentoRepository $er) {
                return $er->createQueryBuilder('d')
                    ->where('d.stRegistroAtivo = :stregistroativo')
                    ->setParameter('stregistroativo', 'S');
            },
            'choice_label' => 'dsDepartamento',
            'placeholder' => 'Selecione o Departamento'
        ))
        ->add('dsRedePrograma', TextType::class , array(
                'label' => 'Rede Programa',
                'attr' => array('maxlength' => 250)
            )
        );
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\RedePrograma'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_adminbundle_redeprograma';
    }


}
