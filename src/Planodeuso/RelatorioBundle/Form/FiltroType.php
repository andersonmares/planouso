<?php
/**
 * Created by PhpStorm.
 * User: fabio.teixeira
 * Date: 17/05/2018
 * Time: 17:02
 */

namespace Planodeuso\RelatorioBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltroType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tpRelatorio', ChoiceType::class, array(
                'label' => 'Tipo de Relatório',
                'choices' => array(
                    'Por Ação Orçamentária' => 'acaoOrcamentaria',
                    'Por Atividade' => 'atividade'
                ),
                'choices_as_values' => true,'multiple'=>false,'expanded'=>true
        ))->add('nuAnoExercicio', ChoiceType::class, array(
                'label' => 'Exercício',
                'choices' => $this->anosExercicio(),
                'placeholder' => 'Selecione'
        ))->add('tpExibicao', ChoiceType::class, array(
            'label' => 'Formato',
            'choices' => array(
                'Exibição em tela' => '1',
                'Planilha' => '2'
            ),
            'choices_as_values' => true,
            'multiple' => false,
            'expanded' => true
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }


    public function anosExercicio(){
        $anos = array();
        $anoAtual = date('Y');
        for ($i = $anoAtual; $i <= $anoAtual+1; $i++){
           $anos[$i] = $i;
        }
        return $anos;
    }
    /*
    //Alteração realizada em 12/03/2019 (Anderson Oliveira) para possibilitar a geração do relatório do ano 2018
    public function anosExercicio(){
        $anos = array();
        for ($i = 2018; $i <= 2023; $i++){
            $anos[$i] = $i;
        }
        return $anos;
    }
    */
}