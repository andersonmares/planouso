<?php

namespace Planodeuso\AtividadeBundle\Repository;
use Doctrine\ORM\NonUniqueResultException;

/**
 * AtividadePlanoUsoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AtividadePlanoUsoRepository extends \Doctrine\ORM\EntityRepository
{

    public function atividadeId($id, $coDepartamento){

        try {
            return $this->createQueryBuilder('a')
                ->select('
                    a.id, a.nuPrioridade, a.nuAnoExercicioAtividade , a.vlTotal, a.vlExecutarExercicio, b.dsVinculoPlanejamento,
                    c.dsTipoInstrumento, d.dsRedePrograma, e.dsAtividade, f.dsTipoAtividade, g.sgUf, h.id as coMunicipioIbge, h.noMunicipioAcentuado,
                    i.dsTipoComponente, a.nuProposta, a.coCnes, j.id as coVinculoNotaEmpenho, j.coNotaEmpenhoPlanouso, l.nuNotaEmpenho, l.dsNotaEmpenho, l.nuProcesso, l.vlEmpenhado as vlNotaEmpenho
                    ')
				->innerJoin('Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento', 'y', 'WITH', 'y.coAcaoOrcamentaria = a.coAcaoOrcamentaria and y.coDepartamento = a.coDepartamento and y.stRegistroAtivo = :stRegistroAtivo')
                ->innerJoin('Planodeuso\AtividadeBundle\Entity\AcaoOrcamentaria', 'z', 'WITH', 'z.id = a.coAcaoOrcamentaria and z.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\VinculoPlanejamento', 'b', 'WITH', 'b.id = a.coVinculoPlanejamento and b.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\TipoInstrumento', 'c', 'WITH', 'c.id = a.coTipoInstrumento and c.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\RedePrograma', 'd', 'WITH', 'd.id = a.coRedeprogramaPlanouso and d.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\Atividade', 'e', 'WITH', 'e.id = a.coAtividade and e.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\TipoAtividade', 'f', 'WITH', 'f.id = a.coTipoAtividade and f.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\UF', 'g', 'WITH', 'g.id = a.coUfIbge and g.stRegistroAtivo = :stRegistroAtivo')
                ->leftJoin('Admin\AdminBundle\Entity\Municipio', 'h', 'WITH', 'h.id = a.coMunicipioIbge and h.stRegistroAtivo = :stRegistroAtivo and h.stMunicipio = :stMunicipio')
                ->leftJoin('Admin\AdminBundle\Entity\TipoComponente', 'i', 'WITH', 'i.id = a.coTipoComponente and i.stRegistroAtivo = :stRegistroAtivo')
				->leftJoin('Admin\AdminBundle\Entity\RlNotaEmpenhoAtividadePlanouso', 'j', 'WITH', 'j.coAtividadePlanouso = a.id and j.stRegistroAtivo = :stRegistroAtivo')
				->leftJoin('Admin\AdminBundle\Entity\NotaEmpenho', 'l', 'WITH', 'l.id = j.coNotaEmpenhoPlanouso and l.stRegistroAtivo = :stRegistroAtivo')
                ->andWhere('a.id = :id')
				->andWhere('a.coDepartamento = :coDepartamento')
                ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
                ->setParameter('id', $id)
                ->setParameter('coDepartamento', $coDepartamento)
                ->setParameter('stRegistroAtivo', 'S')
                ->setParameter('stMunicipio', 'ATIVO')
                ->orderBy('a.nuPrioridade')
                ->getQuery()
                ->getOneOrNullResult();
            ;
        } catch (NonUniqueResultException $e) {
            return null;
        };

    }

	public function listarAtividade($idAcao, $coDepartamento){
		
		return $this->createQueryBuilder('a')
			->select('a.id, a.nuPrioridade, a.nuAnoExercicioAtividade , a.vlTotal, a.vlExecutarExercicio, b.dsVinculoPlanejamento, c.dsTipoInstrumento, d.dsRedePrograma, e.dsAtividade, f.dsTipoAtividade, g.sgUf, h.id as coMunicipioIbge, h.noMunicipioAcentuado')
			->innerJoin('Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento', 'y', 'WITH', 'y.coAcaoOrcamentaria = a.coAcaoOrcamentaria and y.coDepartamento = a.coDepartamento and y.stRegistroAtivo = :stRegistroAtivo')
			->innerJoin('Planodeuso\AtividadeBundle\Entity\AcaoOrcamentaria', 'z', 'WITH', 'z.id = a.coAcaoOrcamentaria and z.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\VinculoPlanejamento', 'b', 'WITH', 'b.id = a.coVinculoPlanejamento and b.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\TipoInstrumento', 'c', 'WITH', 'c.id = a.coTipoInstrumento and c.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\RedePrograma', 'd', 'WITH', 'd.id = a.coRedeprogramaPlanouso and d.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\Atividade', 'e', 'WITH', 'e.id = a.coAtividade and e.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\TipoAtividade', 'f', 'WITH', 'f.id = a.coTipoAtividade and f.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\UF', 'g', 'WITH', 'g.id = a.coUfIbge and g.stRegistroAtivo = :stRegistroAtivo')
			->leftJoin('Admin\AdminBundle\Entity\Municipio', 'h', 'WITH', 'h.id = a.coMunicipioIbge and h.stRegistroAtivo = :stRegistroAtivo and h.stMunicipio = :stMunicipio')
			->andWhere('a.coDepartamento = :coDepartamento')
			->andWhere('a.coAcaoOrcamentaria = :coAcaoOrcamentaria')
			->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
			->setParameter('coAcaoOrcamentaria', $idAcao)
			->setParameter('coDepartamento', $coDepartamento)
			->setParameter('stRegistroAtivo', 'S')
			->setParameter('stMunicipio', 'ATIVO')
			->orderBy('a.nuPrioridade')
			->getQuery()
			->getResult();
			;

	} 
}
