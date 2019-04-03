<?php
/**
 * Created by PhpStorm.
 * User: fabio.teixeira
 * Date: 28/02/2018
 * Time: 19:44
 */

namespace Admin\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PlanilhaNotaEmpenhoType extends  AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->setAction($options['data']['action'])
            ->add('nuAnoExercicio', ChoiceType::class, array(
            'label' => 'Exercício',
            'choices' => $this->anosExercicio(),
            'placeholder' => 'Selecione'
        ))->add(
            'planilha', FileType::class, array(
            'label' => 'Planilha Nota de Empenho',
            'constraints' => array(
                new File(
                    array(
                        'maxSize' => '2048k',
                        'mimeTypes' => array('application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'),
                        'mimeTypesMessage' => 'O tipo de arquivo é invalido. Os tipos pertmitidos são "xls ou xlsx".'
                    ))
            )
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array());
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_adminbundle_planilhanotaempenho';
    }

    public function anosExercicio(){
        $anos = array();
        $anoAtual = date('Y');
        for ($i = $anoAtual; $i <= $anoAtual+1; $i++){
            $anos[$i] = $i;
        }
        return $anos;
    }
}