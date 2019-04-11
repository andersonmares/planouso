<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\Atividade;
use Admin\AdminBundle\Entity\Municipio;
use Admin\AdminBundle\Entity\RedePrograma;
use Admin\AdminBundle\Entity\TipoAtividade;
use Admin\AdminBundle\Entity\TipoComponente;
use Admin\AdminBundle\Entity\TipoInstrumento;
use Admin\AdminBundle\Entity\UF;
use Admin\AdminBundle\Entity\VinculoPlanejamento;
use Admin\AdminBundle\Repository\AtividadeRepository;
use Admin\AdminBundle\Repository\MunicipioRepository;
use Admin\AdminBundle\Repository\RedeProgramaRepository;
use Admin\AdminBundle\Repository\TipoAtividadeRepository;
use Admin\AdminBundle\Repository\TipoComponenteRepository;
use Admin\AdminBundle\Repository\TipoInstrumentoRepository;
use Admin\AdminBundle\Repository\UFRepository;
use Admin\AdminBundle\Repository\VinculoPlanejamentoRepository;
use AppBundle\Validator\Constraints\Saldo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class AtividadePlanoUsoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nuPrioridade', ChoiceType::class, array(
                'label' => 'Status do Item',
                'choices' => $this->prioridades(),
                'placeholder' => 'Selecione'
            ))
            ->add('vinculoPlanejamento', EntityType::class, array(
                    'label' => 'Vinculo de Planejamento',
                    'class' => VinculoPlanejamento::class,
                    'query_builder' => function (VinculoPlanejamentoRepository $er){
                        return $er->createQueryBuilder('v')
                            ->where('v.stRegistroAtivo = :stregistroativo')
                            ->orderBy('v.dsVinculoPlanejamento')
                            ->setParameter('stregistroativo', 'S');
                    },
                    'choice_label' => 'dsVinculoPlanejamento',
                    'placeholder' => 'Selecione'
                )
            )
            ->add('tipoInstrumento', EntityType::class, array(
                'label' => 'Instrumento',
                'class' => TipoInstrumento::class,
                'query_builder' => function (TipoInstrumentoRepository $er){
                    return $er->createQueryBuilder('i')
                        ->where('i.stRegistroAtivo = :stregistroativo')
                        ->orderBy('i.dsTipoInstrumento')
                        ->setParameter('stregistroativo', 'S');
                },
                'choice_label' => 'dsTipoInstrumento',
                'placeholder' => 'Selecione'
            ))
            ->add('redePrograma', EntityType::class, array(
                'label' => 'Programa/Política/Rede',
                'class' => RedePrograma::class,
                'query_builder' => function (RedeProgramaRepository $er){
                    return $er->createQueryBuilder('r')
                        ->where('r.stRegistroAtivo = :stregistroativo')
                        ->orderBy('r.dsRedePrograma')
                        ->setParameter('stregistroativo', 'S');
                },
                'choice_label' => 'dsRedePrograma',
                'placeholder' => 'Selecione'
            ))
            ->add('tipoComponente', EntityType::class, array(
                'label' => 'Componente',
                'class' => TipoComponente::class,
                'query_builder' => function (TipoComponenteRepository $er){
                    return $er->createQueryBuilder('r')
                        ->where('r.stRegistroAtivo = :stregistroativo')
                        ->orderBy('r.dsTipoComponente')
                        ->setParameter('stregistroativo', 'S');
                },
                'choice_label' => 'dsTipoComponente',
                'placeholder' => 'Selecione'
            ))
            ->add('atividade', EntityType::class, array(
                'label' => 'Objeto',//Antigo "Atividade"
                'class' => Atividade::class,
                'query_builder' => function (AtividadeRepository $er){
                    return $er->createQueryBuilder('a')
                        ->where('a.stRegistroAtivo = :stregistroativo')
                        ->orderBy('a.dsAtividade')
                        ->setParameter('stregistroativo', 'S');
                },
                'choice_label' => 'dsAtividade',
                'placeholder' => 'Selecione'
            ))
            ->add('nuAnoExercicioAtividade', ChoiceType::class, array(
                'label' => 'Exercício',
                'choices' => $this->anosExercicio(),
                'placeholder' => 'Selecione'
            ))
            ->add('tipoAtividade', EntityType::class, array(
                'label' => 'Ano de Referência',//Antigo "Tipo de Atividade"
                'class' => TipoAtividade::class,
                'query_builder' => function (TipoAtividadeRepository $er){
                    return $er->createQueryBuilder('a')
                        ->where('a.stRegistroAtivo = :stregistroativo')
                        ->orderBy('a.dsTipoAtividade')
                        ->setParameter('stregistroativo', 'S');
                },
                'choice_label' => 'dsTipoAtividade',
                'placeholder' => 'Selecione'
            ))
            ->add('vlTotal', MoneyType::class, array(
                'label' => 'Valor Total',
                'attr' => [
                    'type' => 'number',
                ],
                'currency' => 'BRL',
                'grouping' => true,

            ))
            ->add('dsJustificativa', TextareaType::class,array(
                'label' => 'Justificativa',
                'attr' => array(
                'rowls' => 20
                )

            ))
            ->add('uf', EntityType::class, array(
                'label' => 'UF',
                'class' => UF::class,
                'query_builder' => function (UFRepository $er){
                    return $er->listaUfForm();
                },
                'choice_label' => 'sgUF',
                'placeholder' => 'Selecione'
            ))
            ->add('municipio', ChoiceType::class, array(
                'label' => 'Município',
                'choices' => array(),
                'placeholder' => 'Selecione a UF',
                'required' => false
            ))
            ->add('coCnes', TextType::class, array(
                'label' => 'CNES',
                'required' => false,
                'attr' => array(
                    'maxlength' => 7,
                )
            ))
            ->add('nuProposta', TextType::class, array(
                'label' => 'Nº da Proposta',
                'required' => false,
                'attr' => array(
                    'maxlength' => 30
                )
            ))
            ->add('nuProcesso', TextType::class, array(
                'label' => 'NUP',
                'required' => false,
                'attr' => array(
                    'maxlength' => 30
                )
            ))
            ->add('dsObservacao', TextareaType::class,array(
                'label' => 'Observações',
                'attr' => array(
                    'rowls' => 20
                )
            ))
            ->add('vlExecutarExercicio', MoneyType::class, array(
                'label' => 'Valor Ano Vigente',
                'attr' => [
                    'type' => 'number',
                ],
                'currency' => 'BRL',
                'grouping' => true,
                /*'constraints' => array(
                    new Saldo(array('saldo'=> $options['vlSaldo']))

                )*/
            ))
            ->add('nuPortaria', TextType::class,array(
                'label' => 'Portaria',
                'required' => false
            ))
            ->add('dtPortaria', DateType::class, array(
                'label' => 'Data da Portaria',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'required' => false,
                'attr' => array(
                    'data-inputmask-alias' => 'datetime',
                    'data-inputmask-inputformat' =>  'mm/dd/yyyy'
                ),
                'constraints' => array(
                    new Date()

                )
            ))->add('vlProcessadoCgpo', MoneyType::class, array(
                'label' => 'Valor Processado CGPO',
                'attr' => [
                    'type' => 'number',
                ],
                'currency' => 'BRL',
                'grouping' => true,
            ));
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA ,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();
                $coUfIbge = !is_null($data->getUf())? $data->getUf()->getId() : null;
                if (!is_null($coUfIbge)) {
                    $form->add('municipio', EntityType::class, array(
                        'class' => Municipio::class,
                        'label' => 'Município',
                        'query_builder' => function (MunicipioRepository $er) use ($coUfIbge) {
                            return $er->createQueryBuilder('m')
                                ->andWhere('m.coUFIbge = :coUfIbge')
                                ->andWhere('m.stRegistroAtivo = :stRegistroAtivo')
                                ->andWhere('m.stMunicipio = :stMunicipio')
                                ->orderBy('m.noMunicipio')
                                ->setParameter('coUfIbge', $coUfIbge)
                                ->setParameter('stRegistroAtivo', 'S')
                                ->setParameter('stMunicipio', 'ATIVO');;
                        },
                        'required' => false,
                        'choice_label' => 'noMunicipioAcentuado',
                        'placeholder' => 'Selecione'
                    ));
                }
            }
        );
        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();
                $coUfIbge = $data['uf'];
                if (!is_null($coUfIbge)) {
                    $form->add('municipio', EntityType::class, array(
                        'class' => Municipio::class,
                        'label' => 'Município',
                        'query_builder' => function (MunicipioRepository $er) use ($coUfIbge) {
                            return $er->createQueryBuilder('m')
                                ->andWhere('m.coUFIbge = :coUfIbge')
                                ->andWhere('m.stRegistroAtivo = :stRegistroAtivo')
                                ->andWhere('m.stMunicipio = :stMunicipio')
                                ->orderBy('m.noMunicipio')
                                ->setParameter('coUfIbge', $coUfIbge)
                                ->setParameter('stRegistroAtivo', 'S')
                                ->setParameter('stMunicipio', 'ATIVO');;
                        },
                        'required' => false,
                        'choice_label' => 'noMunicipioAcentuado',
                        'placeholder' => 'Selecione'
                    ));
                }
            }
        );


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\AtividadePlanoUso',
            'vlSaldo' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'atividadeplanouso';
    }


    public function prioridades() {
        $r = array();
        for ($i = 1; $i <= 10; $i++) $r[$i] = $i;
        return $r;
    }

    public function anosExercicio(){
        $anos = array();
        $anoAtual = date('Y');
        for ($i = $anoAtual; $i >= 2010; $i--){
            $anos[$i] = $i;
        }
        return $anos;
    }


}
