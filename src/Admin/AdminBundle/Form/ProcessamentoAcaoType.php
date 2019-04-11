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
use Admin\AdminBundle\Repository\TipoDespesaRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
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
        $builder->add('coDepartamento', EntityType::class, array(
            'label' => 'Departamento',
            'required' => false,
            'class' => Departamento::class,
            'query_builder' => function (DepartamentoRepository $er) {
                return $er->createQueryBuilder('a')
                    ->where('a.stRegistroAtivo = :stregistroativo')
                    ->setParameter('stregistroativo', 'S')
                    ->orderBy('a.dsDepartamento', 'ASC');
            },
            'choice_label' => 'dsDepartamento',
            'placeholder' => 'Selecione'
        ))->add('nuProcesso', TextType::class, array(
            'label' => 'NUP',
            'required' => false,
        ))->add('nuProposta', TextType::class, array(
            'label' => 'Nº da Proposta',
            'required' => false,
        ))->add('btnPesquisar', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-success')
            )
        );
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
        return 'processamento';
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
