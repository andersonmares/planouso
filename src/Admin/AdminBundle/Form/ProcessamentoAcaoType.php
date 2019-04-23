<?php

namespace Admin\AdminBundle\Form;

use Admin\AdminBundle\Entity\AcaoOrcamentaria;
use Admin\AdminBundle\Entity\AuxUsuarioPessoaFisica;
use Admin\AdminBundle\Entity\PerfilAcesso;
use Admin\AdminBundle\Entity\Departamento;
use Admin\AdminBundle\Entity\TipoDespesa;
use Admin\AdminBundle\Repository\AcaoOrcamentariaRepository;
use Admin\AdminBundle\Repository\DepartamentoRepository;
use Admin\AdminBundle\Repository\PerfilAcessoRepository;
use Admin\AdminBundle\Repository\StatusItemRepository;
use Admin\AdminBundle\Repository\TipoDespesaRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Proxies\__CG__\Admin\AdminBundle\Entity\StatusItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcessamentoAcaoType extends AbstractType
{


    /**
     * @var EntityRepository
     */
    private $repository;

    /**
     * AcaoOrcamentariaRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(AcaoOrcamentaria::class);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add('nuProcesso', TextType::class, array(
            'label' => 'NUP',
            'required' => false,
        ))->add('nuProposta', TextType::class, array(
            'label' => 'Nº da Proposta',
            'required' => false,
        ))->add('btnPesquisar', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-success')
            )
        )
            ->add('coStatus', EntityType::class, array(
                    'label' => 'Status do Item',
                    'class' => StatusItem::class,
                    'query_builder' => function (StatusItemRepository $er) {
                        return $er->createQueryBuilder('v');
                    },
                    'required' => false,
                    'choice_label' => 'noStatus',
                    'placeholder' => 'Selecione'
                )
            )

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults(array(
//            'data_class' => AcaoOrcamentaria::class,
//        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'processamentoFilter';
    }

    public function anosExercicio()
    {
        $anos = array();
        $anoAtual = date('Y');
        for ($i = $anoAtual; $i <= $anoAtual + 1; $i++) {
            $anos[$i] = $i;
        }
        return $anos;
    }

    private function getAnoExercicio()
    {
        $arrAnoExercicio = $this->repository->listarAnoExerciciForm();
        foreach ($arrAnoExercicio as $anoExercicio) {
            $arr[$anoExercicio["nuAnoExercicio"]] = $anoExercicio["nuAnoExercicio"];
        }
        return $arr;
    }

}
