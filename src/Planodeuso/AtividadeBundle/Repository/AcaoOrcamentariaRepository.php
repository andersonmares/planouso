<?php

namespace Planodeuso\AtividadeBundle\Repository;
use Doctrine\ORM\NonUniqueResultException;

/**
 * AcaoOrcamentariaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AcaoOrcamentariaRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * lista os anos de exercicio existentes na TB_ACAO_ORCAMENTARIA
     * @return array
     */
    public function listarAnoExercicio($coDepartamento){

        $rs = $this->createQueryBuilder('a')
            ->select('distinct a.nuAnoExercicio')
            ->where('a.coDepartamento = :coDepartamento and a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('coDepartamento', $coDepartamento)
            ->setParameter('stRegistroAtivo', 'S')
            ->orderBy('a.nuAnoExercicio')
            ->getQuery()
            ->getResult();

        $anos = array();
        foreach ($rs as $item){
            $anos[] = array(
                'nuAnoExercicio' => $item['nuAnoExercicio'],
                'labelAnoExercicio' => ($item['nuAnoExercicio'] > date('Y'))? $item['nuAnoExercicio'].' - Em planejamento' : $item['nuAnoExercicio']
            );
        }

        return $anos;
    }

    public function listarAcaoOrcamentaria($coDepartamento, $nuAnoExercicio){

        $rs = $this->createQueryBuilder('a')
            ->select('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa, d.dsDepartamento, d.sgDepartamento,
                nvl(a.vlAtualizado, 0) - sum(nvl(e.vlExecutarExercicio, 0)) as vlSaldo,
                sum(nvl(e.vlExecutarExercicio, 0) as vlUtilizado,
                sum(e.vlProcessadoCgpo) as vlProcessadoCgpo,
                count(e.id) as qtAtividade
            ')
            ->innerJoin('Admin\AdminBundle\Entity\TipoDespesa', 'b', 'WITH', 'b.id = a.coTipoDespesa and b.stRegistroAtivo = :stRegistroAtivo')
            ->innerJoin('Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento', 'c', 'WITH', 'c.coAcaoOrcamentaria = a.id and c.coDepartamento = :coDepartamento and c.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Admin\AdminBundle\Entity\Departamento', 'd', 'WITH', 'd.id = a.coDepartamento and d.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Planodeuso\AtividadeBundle\Entity\AtividadePlanoUso', 'e', 'WITH', 'e.coAcaoOrcamentaria = a.id and e.stRegistroAtivo = :stRegistroAtivo')
            ->andWhere('a.coDepartamento = :coDepartamento')
            ->andWhere('a.nuAnoExercicio = :nuAnoExercicio')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('coDepartamento', $coDepartamento)
            ->setParameter('nuAnoExercicio', $nuAnoExercicio)
            ->setParameter('stRegistroAtivo', 'S')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa, d.dsDepartamento, d.sgDepartamento
            ')
            ->getQuery()
            ->getResult();

        return $rs;
    }

    public function acaoOrcamentariaId($coDepartamento, $id){

        try {
            $rs = $this->createQueryBuilder('a')
                ->select('
                    a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                    a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                    a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                    b.dsTipoDespesa, c.dsDepartamento, c.sgDepartamento,
                    nvl(SUM(d.vlExecutarExercicio), 0) as vlAtividade,
                    sum(nvl(d.vlProcessadoCgpo, 0)) as vlProcessadoCgpo,
                    nvl(a.vlAtualizado, 0) - sum(nvl(d.vlExecutarExercicio, 0)) as vlSaldo, count(d.id) as qtAtividade
                ')
                ->innerJoin('Admin\AdminBundle\Entity\TipoDespesa', 'b', 'WITH', 'b.id = a.coTipoDespesa and b.stRegistroAtivo = :stRegistroAtivo')
                ->innerJoin('Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento', 'e', 'WITH', 'e.coAcaoOrcamentaria = a.id and e.coDepartamento = :coDepartamento and e.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\Departamento', 'c', 'WITH', 'c.id = e.coDepartamento and c.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Planodeuso\AtividadeBundle\Entity\AtividadePlanoUso', 'd', 'WITH', 'd.coAcaoOrcamentaria = a.id and d.stRegistroAtivo = :stRegistroAtivo')
                ->andWhere('a.id = :id')
                ->andWhere('e.coDepartamento = :coDepartamento')
                ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
                ->setParameter('id', $id)
                ->setParameter('coDepartamento', $coDepartamento)
                ->setParameter('stRegistroAtivo', 'S')
                ->groupBy('
                    a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                    a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                    a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                    b.dsTipoDespesa, c.dsDepartamento, c.sgDepartamento')
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
        return $rs;
    }
}
