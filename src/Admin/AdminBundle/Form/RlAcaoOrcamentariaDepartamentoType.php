<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Repository\DepartamentoRepository;
use AppBundle\Validator\Constraints\Checkbox;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RlAcaoOrcamentariaDepartamentoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('arrayDepartamento', EntityType::class, array(
            'constraints' => array(
                new Checkbox()
            ),
            'required' => false,
            'label' => 'Selecione o departamento',
            'class' => Departamento::class,
            'multiple' => true,
            'expanded' => true,
            'query_builder' =>  function (DepartamentoRepository $er) {
                return $er->createQueryBuilder('d')
                    ->where('d.stRegistroAtivo = :stregistroativo')
                    ->setParameter('stregistroativo', 'S')
                    ->addOrderBy('d.sgDepartamento');
            },
            'choice_label' => 'sgDepartamento',

        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_vinculo_departamento';
    }


}
