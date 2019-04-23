<?php

namespace Admin\AdminBundle\Repository;
use Admin\AdminBundle\Entity\StatusItem;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
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
    public function listarAnoExercicio(){

        $rs = $this->createQueryBuilder('a')
            ->select('a.nuAnoExercicio')
            ->where('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('stRegistroAtivo', 'S')
            ->orderBy('a.nuAnoExercicio', 'desc')
            ->distinct()
            ->getQuery()
            ->getResult();

        return $rs;
    }

    public function listarAnoExerciciForm(){

        $rs = $this->createQueryBuilder('a')
            ->select('distinct a.nuAnoExercicio')
            ->where('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('stRegistroAtivo', 'S')
            ->orderBy('a.nuAnoExercicio', 'desc')
            ->getQuery()->getResult();

        return $rs;
    }

    public function listarAcaoOrcamentaria($nuAnoExercicio){

        $rs = $this->createQueryBuilder('a')
            ->andWhere('a.nuAnoExercicio = :nuAnoExercicio')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('nuAnoExercicio', $nuAnoExercicio)
            ->setParameter('stRegistroAtivo', 'S')
            ->getQuery()
            ->getResult();

        return $rs;
    }

    public function acaoOrcamentariaId($id){
        $rs = $this->createQueryBuilder('a')
            ->select('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa, c.dsDepartamento, c.sgDepartamento,
                nvl(a.vlAtualizado, 0) - sum(nvl(d.vlExecutarExercicio, 0)) as vlSaldo,
                sum(nvl(d.vlProcessadoCgpo, 0)) as vlProcessadoCgpo,
                sum(nvl(d.vlExecutarExercicio, 0)) as vlAtividade,
                count(d.id) as qtAtividade
            ')
            ->innerJoin('Admin\AdminBundle\Entity\TipoDespesa', 'b', 'WITH', 'b.id = a.coTipoDespesa and b.stRegistroAtivo = :stRegistroAtivo')
            
            ->leftJoin('Admin\AdminBundle\Entity\Departamento', 'c', 'WITH', 'c.id = a.coDepartamento and c.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Planodeuso\AtividadeBundle\Entity\AtividadePlanoUso', 'd', 'WITH', 'd.coAcaoOrcamentaria = a.id and d.stRegistroAtivo = :stRegistroAtivo')
          //  ->innerJoin('Admin\AdminBundle\Entity\StatusItem','i','WITH','i.coSeqStatus = d.seqStatus')
            ->andWhere('a.id = :id')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('id', $id)
            ->setParameter('stRegistroAtivo', 'S')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa, c.dsDepartamento, c.sgDepartamento
            ')
            ->getQuery()->getOneOrNullResult();

        return $rs;
    }


    public function totalizadoresAcaoOrcamentaria($id)
    {
       $sql = 'SELECT
                SUM(CASE WHEN t3_.co_status = 1 THEN 1 ELSE 0 END) AS qt_planejados,
                SUM(CASE WHEN t3_.co_status = 2 THEN 1 ELSE 0 END) AS qt_priorizado,
                SUM(CASE WHEN t3_.co_status = 3 THEN 1 ELSE 0 END) AS qt_processar,
                SUM(CASE WHEN t3_.co_status = 4 THEN 1 ELSE 0 END) AS qt_processamento,
                SUM(CASE WHEN t3_.co_status = 5 THEN 1 ELSE 0 END) AS qt_processados,
                SUM(CASE WHEN t3_.co_status = 1 THEN t3_.vl_total ELSE 0 END) AS vl_planejados,
                SUM(CASE WHEN t3_.co_status = 2 THEN t3_.vl_total ELSE 0 END) AS vl_priorizado,
                SUM(CASE WHEN t3_.co_status = 3 THEN t3_.vl_total ELSE 0 END) AS vl_processar,
                SUM(CASE WHEN t3_.co_status = 4 THEN t3_.vl_total ELSE 0 END) AS vl_processamento,
                SUM(CASE WHEN t3_.co_status = 5 THEN t3_.vl_total ELSE 0 END) AS vl_processados,
                count(t3_.CO_SEQ_ATIVIDADE_PLANOUSO) AS CO_SEQ_ATIVIDADE_PLANOUSO 
                
                FROM DBPROPOSTASAS.TB_ACAO_ORCAMENTARIA t0_
                INNER JOIN DBPROPOSTASAS.TB_TIPO_DESPESA t1_ ON (t1_.CO_SEQ_TIPO_DESPESA = t0_.CO_TIPO_DESPESA AND t1_.ST_REGISTRO_ATIVO = \'S\') 
                LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO t2_ ON (t2_.CO_SEQ_DEPARTAMENTO = t0_.CO_DEPARTAMENTO AND t2_.ST_REGISTRO_ATIVO = \'S\')
                LEFT JOIN DBPROPOSTASAS.TB_ATIVIDADE_PLANOUSO t3_ ON (t3_.CO_ACAO_ORCAMENTARIA = t0_.CO_SEQ_ACAO_ORCAMENTARIA AND t3_.ST_REGISTRO_ATIVO = \'S\') 
                WHERE t0_.CO_SEQ_ACAO_ORCAMENTARIA = :co_acao_orcamentaria AND t0_.ST_REGISTRO_ATIVO = \'S\' 
                GROUP BY t0_.CO_SEQ_ACAO_ORCAMENTARIA, t0_.CO_TIPO_DESPESA, t0_.CO_DEPARTAMENTO, t0_.NU_ANO_EXERCICIO, 
                t0_.NU_ACAO_ORCAMENTARIA, t0_.NU_PLANO_ORCAMENTARIO, t0_.DS_DENOMINACAO, t0_.VL_EXECUT_EXERCICIO_ANTERIOR,
                t0_.VL_APROVADO, t0_.VL_BLOQUEADO, t0_.VL_ATUALIZADO, t0_.VL_CAPITAL, t0_.VL_DISPONIVEL, t0_.VL_DESPESA_EMPENHADA, 
                t0_.VL_DEPESA_EMPENHADA_ALIQUIDAR, t0_.VL_DESPESA_LIQUIDADA, t0_.VL_DESPESA_PAGA, t1_.DS_TIPO_DESPESA, t2_.DS_DEPARTAMENTO, t2_.SG_DEPARTAMENTO
       ';
        $em = $this->getEntityManager();
        $query = $em->getConnection()->executeQuery($sql, array( 'co_acao_orcamentaria' => $id));
        return $query->fetch();


    }


    public function jsonListarAcaoOrcamentaria($nuAnoExercicio){
        $sql = '
                SELECT
                    acao.CO_SEQ_ACAO_ORCAMENTARIA AS "id",
                    acao.CO_TIPO_DESPESA AS "coTipoDespesa",
                    acao.CO_DEPARTAMENTO AS "coDepartamento",
                    acao.NU_ANO_EXERCICIO AS "nuAnoExercicio",
                    acao.NU_ACAO_ORCAMENTARIA AS "nuAcaoOrcamentaria",
                    acao.NU_PLANO_ORCAMENTARIO AS "nuPlanoOrcamentario",
                    acao.DS_DENOMINACAO AS "dsDenominacao",
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR AS "vlExecutExercicioAnterior",
                    acao.VL_APROVADO AS "vlAprovado",
                    acao.VL_BLOQUEADO AS "vlBloqueado",
                    acao.VL_ATUALIZADO AS "vlAtualizado",
                    acao.VL_CAPITAL AS "vlCapital",
                    acao.VL_DISPONIVEL AS "vlDiponivel",
                    acao.VL_DESPESA_EMPENHADA AS "vlDespesaEmpenhada",
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR AS "vlDepesaEmpenhadaAliquidar",
                    acao.VL_DESPESA_LIQUIDADA AS "vlDespesaLiquidada",
                    acao.VL_DESPESA_PAGA AS "vlDespesaPaga",
                    tpDespesa.DS_TIPO_DESPESA AS "dsTipoDespesa",
                    departamento.DS_DEPARTAMENTO AS "dsDepartamento",
                    departamento.SG_DEPARTAMENTO AS "sgDepartamento",
                    NVL(acao.VL_ATUALIZADO, 0) - NVL(atividade.VL_EXECUTAR_EXERCICIO, 0) AS "vlSaldo",
                    NVL(atividade.QT_ATIVIDADE, 0) AS "qtAtividade",
                    atividade.VL_PROCESSADO_CGPO AS "vlProcessadoCgpo",
                    LISTAGG(departamento2.SG_DEPARTAMENTO, \'; \') WITHIN GROUP (ORDER BY departamento2.SG_DEPARTAMENTO ASC)  AS "sgDepartamentoVinculado"
                FROM
                    DBPROPOSTASAS.TB_ACAO_ORCAMENTARIA acao
                    INNER JOIN DBPROPOSTASAS.TB_TIPO_DESPESA tpDespesa ON (tpDespesa.CO_SEQ_TIPO_DESPESA = acao.CO_TIPO_DESPESA AND tpDespesa.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento ON (departamento.CO_SEQ_DEPARTAMENTO = acao.CO_DEPARTAMENTO AND departamento.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.RL_ACAOORCAMENTAR_DEPARTAMENTO rlacaodep ON (rlacaodep.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA AND rlacaodep.ST_REGISTRO_ATIVO    = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento2 ON (departamento2.CO_SEQ_DEPARTAMENTO = rlacaodep.CO_DEPARTAMENTO AND departamento2.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN (
                        SELECT
                            CO_ACAO_ORCAMENTARIA, COUNT(CO_SEQ_ATIVIDADE_PLANOUSO) AS QT_ATIVIDADE, SUM(NVL(VL_EXECUTAR_EXERCICIO, 0)) AS VL_EXECUTAR_EXERCICIO, SUM(NVL(VL_PROCESSADO_CGPO, 0)) AS VL_PROCESSADO_CGPO
                        FROM
                            DBPROPOSTASAS.TB_ATIVIDADE_PLANOUSO
                        WHERE
                            ST_REGISTRO_ATIVO = :stRegistroAtivo AND NU_ANO_EXERCICIO = :nuAnoExercicio
                        GROUP BY
                            CO_ACAO_ORCAMENTARIA
                    ) atividade ON (atividade.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA)
                    WHERE
                      acao.NU_ANO_EXERCICIO  = :nuAnoExercicio AND acao.ST_REGISTRO_ATIVO   = :stRegistroAtivo
                GROUP BY
                    acao.CO_SEQ_ACAO_ORCAMENTARIA,
                    acao.CO_TIPO_DESPESA,
                    acao.CO_DEPARTAMENTO,
                    acao.NU_ANO_EXERCICIO,
                    acao.NU_ACAO_ORCAMENTARIA,
                    acao.NU_PLANO_ORCAMENTARIO,
                    acao.DS_DENOMINACAO,
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR,
                    acao.VL_APROVADO,
                    acao.VL_BLOQUEADO,
                    acao.VL_ATUALIZADO,
                    acao.VL_CAPITAL,
                    acao.VL_DISPONIVEL,
                    acao.VL_DESPESA_EMPENHADA,
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR,
                    acao.VL_DESPESA_LIQUIDADA,
                    acao.VL_DESPESA_PAGA,
                    tpDespesa.DS_TIPO_DESPESA,
                    departamento.DS_DEPARTAMENTO,
                    departamento.SG_DEPARTAMENTO,
                    atividade.VL_EXECUTAR_EXERCICIO,
                    atividade.QT_ATIVIDADE,
                    atividade.VL_PROCESSADO_CGPO
                ORDER BY
                    acao.NU_ACAO_ORCAMENTARIA ASC,
                    acao.NU_PLANO_ORCAMENTARIO ASC,
                    departamento.SG_DEPARTAMENTO ASC';

        $em = $this->getEntityManager();

        $query = $em->getConnection()->executeQuery($sql, array('stRegistroAtivo' => 'S', 'nuAnoExercicio' => $nuAnoExercicio));

        return $query->fetchAll();
    }

    /**
     * Lista somente as ações com atividades registradas
     * @param $nuAnoExercicio
     * @return array
     */
    public function jsonListarAcaoComAtividade($nuAnoExercicio){

        $sql = '
                SELECT
                    acao.CO_SEQ_ACAO_ORCAMENTARIA AS "id",
                    acao.CO_TIPO_DESPESA AS "coTipoDespesa",
                    acao.CO_DEPARTAMENTO AS "coDepartamento",
                    acao.NU_ANO_EXERCICIO AS "nuAnoExercicio",
                    acao.NU_ACAO_ORCAMENTARIA AS "nuAcaoOrcamentaria",
                    acao.NU_PLANO_ORCAMENTARIO AS "nuPlanoOrcamentario",
                    acao.DS_DENOMINACAO AS "dsDenominacao",
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR AS "vlExecutExercicioAnterior",
                    acao.VL_APROVADO AS "vlAprovado",
                    acao.VL_BLOQUEADO AS "vlBloqueado",
                    acao.VL_ATUALIZADO AS "vlAtualizado",
                    acao.VL_CAPITAL AS "vlCapital",
                    acao.VL_DISPONIVEL AS "vlDiponivel",
                    acao.VL_DESPESA_EMPENHADA AS "vlDespesaEmpenhada",
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR AS "vlDepesaEmpenhadaAliquidar",
                    acao.VL_DESPESA_LIQUIDADA AS "vlDespesaLiquidada",
                    acao.VL_DESPESA_PAGA AS "vlDespesaPaga",
                    tpDespesa.DS_TIPO_DESPESA AS "dsTipoDespesa",
                    departamento.DS_DEPARTAMENTO AS "dsDepartamento",
                    departamento.SG_DEPARTAMENTO AS "sgDepartamento",
                    NVL(acao.VL_ATUALIZADO, 0) - NVL(atividade.VL_EXECUTAR_EXERCICIO, 0) AS "vlSaldo",
                    NVL(atividade.QT_ATIVIDADE, 0) AS "qtAtividade",
                    atividade.VL_PROCESSADO_CGPO AS "vlProcessadoCgpo",
                    LISTAGG(departamento2.SG_DEPARTAMENTO, \'; \') WITHIN GROUP (ORDER BY departamento2.SG_DEPARTAMENTO ASC)  AS "sgDepartamentoVinculado"
                FROM
                    DBPROPOSTASAS.TB_ACAO_ORCAMENTARIA acao
                    INNER JOIN DBPROPOSTASAS.TB_TIPO_DESPESA tpDespesa ON (tpDespesa.CO_SEQ_TIPO_DESPESA = acao.CO_TIPO_DESPESA AND tpDespesa.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento ON (departamento.CO_SEQ_DEPARTAMENTO = acao.CO_DEPARTAMENTO AND departamento.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.RL_ACAOORCAMENTAR_DEPARTAMENTO rlacaodep ON (rlacaodep.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA AND rlacaodep.ST_REGISTRO_ATIVO    = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento2 ON (departamento2.CO_SEQ_DEPARTAMENTO = rlacaodep.CO_DEPARTAMENTO AND departamento2.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    INNER JOIN (
                        SELECT
                            CO_ACAO_ORCAMENTARIA, COUNT(CO_SEQ_ATIVIDADE_PLANOUSO) AS QT_ATIVIDADE, SUM(NVL(VL_EXECUTAR_EXERCICIO, 0)) AS VL_EXECUTAR_EXERCICIO, SUM(NVL(VL_PROCESSADO_CGPO, 0)) AS VL_PROCESSADO_CGPO
                        FROM
                            DBPROPOSTASAS.TB_ATIVIDADE_PLANOUSO
                        WHERE
                            ST_REGISTRO_ATIVO = :stRegistroAtivo AND NU_ANO_EXERCICIO = :nuAnoExercicio
                        GROUP BY
                            CO_ACAO_ORCAMENTARIA
                    ) atividade ON (atividade.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA)
                    WHERE
                      acao.NU_ANO_EXERCICIO  = :nuAnoExercicio AND acao.ST_REGISTRO_ATIVO   = :stRegistroAtivo
                GROUP BY
                    acao.CO_SEQ_ACAO_ORCAMENTARIA,
                    acao.CO_TIPO_DESPESA,
                    acao.CO_DEPARTAMENTO,
                    acao.NU_ANO_EXERCICIO,
                    acao.NU_ACAO_ORCAMENTARIA,
                    acao.NU_PLANO_ORCAMENTARIO,
                    acao.DS_DENOMINACAO,
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR,
                    acao.VL_APROVADO,
                    acao.VL_BLOQUEADO,
                    acao.VL_ATUALIZADO,
                    acao.VL_CAPITAL,
                    acao.VL_DISPONIVEL,
                    acao.VL_DESPESA_EMPENHADA,
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR,
                    acao.VL_DESPESA_LIQUIDADA,
                    acao.VL_DESPESA_PAGA,
                    tpDespesa.DS_TIPO_DESPESA,
                    departamento.DS_DEPARTAMENTO,
                    departamento.SG_DEPARTAMENTO,
                    atividade.VL_EXECUTAR_EXERCICIO,
                    atividade.QT_ATIVIDADE,
                    atividade.VL_PROCESSADO_CGPO
                ORDER BY
                    acao.NU_ACAO_ORCAMENTARIA ASC,
                    acao.NU_PLANO_ORCAMENTARIO ASC,
                    departamento.SG_DEPARTAMENTO ASC';

        $em = $this->getEntityManager();

        $rs = $em->getConnection()->executeQuery($sql, array('stRegistroAtivo' => 'S', 'nuAnoExercicio' => $nuAnoExercicio));

        return $rs;
    }




    public function consultaProcessamento($data){

        $sql = '
                SELECT
                    acao.CO_SEQ_ACAO_ORCAMENTARIA AS "id",
                    acao.CO_TIPO_DESPESA AS "coTipoDespesa",
                    acao.CO_DEPARTAMENTO AS "coDepartamento",
                    acao.NU_ANO_EXERCICIO AS "nuAnoExercicio",
                    acao.NU_ACAO_ORCAMENTARIA AS "nuAcaoOrcamentaria",
                    acao.NU_PLANO_ORCAMENTARIO AS "nuPlanoOrcamentario",
                    acao.DS_DENOMINACAO AS "dsDenominacao",
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR AS "vlExecutExercicioAnterior",
                    acao.VL_APROVADO AS "vlAprovado",
                    acao.VL_BLOQUEADO AS "vlBloqueado",
                    acao.VL_ATUALIZADO AS "vlAtualizado",
                    acao.VL_CAPITAL AS "vlCapital",
                    acao.VL_DISPONIVEL AS "vlDiponivel",
                    acao.VL_DESPESA_EMPENHADA AS "vlDespesaEmpenhada",
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR AS "vlDepesaEmpenhadaAliquidar",
                    acao.VL_DESPESA_LIQUIDADA AS "vlDespesaLiquidada",
                    acao.VL_DESPESA_PAGA AS "vlDespesaPaga",
                    tpDespesa.DS_TIPO_DESPESA AS "dsTipoDespesa",
                    departamento.DS_DEPARTAMENTO AS "dsDepartamento",
                    departamento.SG_DEPARTAMENTO AS "sgDepartamento",
                    NVL(acao.VL_ATUALIZADO, 0) - NVL(atividade.VL_EXECUTAR_EXERCICIO, 0) AS "vlSaldo",
                    NVL(atividade.QT_ATIVIDADE, 0) AS "qtAtividade",
                   atividade.VL_EXECUTAR_EXERCICIO vlExecutarExercicio,
                   acao.VL_ATUALIZADO vlAtualizado,
                    atividade.VL_PROCESSADO_CGPO AS "vlProcessadoCgpo"
                  --  LISTAGG(departamento2.SG_DEPARTAMENTO, \'; \') WITHIN GROUP (ORDER BY departamento2.SG_DEPARTAMENTO ASC)  AS "sgDepartamentoVinculado"
                FROM
                    DBPROPOSTASAS.TB_ACAO_ORCAMENTARIA acao
                    INNER JOIN DBPROPOSTASAS.TB_TIPO_DESPESA tpDespesa ON (tpDespesa.CO_SEQ_TIPO_DESPESA = acao.CO_TIPO_DESPESA AND tpDespesa.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento ON (departamento.CO_SEQ_DEPARTAMENTO = acao.CO_DEPARTAMENTO AND departamento.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.RL_ACAOORCAMENTAR_DEPARTAMENTO rlacaodep ON (rlacaodep.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA AND rlacaodep.ST_REGISTRO_ATIVO    = :stRegistroAtivo)
                    LEFT JOIN DBPROPOSTASAS.TB_DEPARTAMENTO departamento2 ON (departamento2.CO_SEQ_DEPARTAMENTO = rlacaodep.CO_DEPARTAMENTO AND departamento2.ST_REGISTRO_ATIVO   = :stRegistroAtivo)
                    INNER JOIN (
                        SELECT
                            CO_ACAO_ORCAMENTARIA, COUNT(CO_SEQ_ATIVIDADE_PLANOUSO) AS QT_ATIVIDADE, SUM(NVL(VL_EXECUTAR_EXERCICIO, 0)) AS VL_EXECUTAR_EXERCICIO, SUM(NVL(VL_PROCESSADO_CGPO, 0)) AS VL_PROCESSADO_CGPO
                        FROM
                            DBPROPOSTASAS.TB_ATIVIDADE_PLANOUSO
                        WHERE
                            ST_REGISTRO_ATIVO = :stRegistroAtivo AND NU_ANO_EXERCICIO = :nuAnoExercicio
                        GROUP BY
                            CO_ACAO_ORCAMENTARIA
                    ) atividade ON (atividade.CO_ACAO_ORCAMENTARIA = acao.CO_SEQ_ACAO_ORCAMENTARIA)
                    inner join DBPROPOSTASAS.TB_ATIVIDADE_PLANOUSO pl on pl.co_acao_orcamentaria = atividade.CO_ACAO_ORCAMENTARIA
                    WHERE
                      acao.NU_ANO_EXERCICIO  = :nuAnoExercicio AND acao.ST_REGISTRO_ATIVO   = :stRegistroAtivo';

        if(!empty($data['processamento']['nuProposta'])){
            $sql .=' and pl.nu_proposta like \'%'. $data['processamento']['nuProposta']. '%\'';
        } 
        
        if(!empty($data['processamento']['dsTipoDespesa'])){
            $sql .=' and acao.CO_TIPO_DESPESA = '. $data['processamento']['dsTipoDespesa'];
        }

        if(!empty($data['processamento']['coDepartamento'])){
            $sql .=' and departamento.CO_SEQ_DEPARTAMENTO = '. $data['processamento']['coDepartamento'];
        }

        if(!empty($data['processamento']['dsDescicao'])){
            $sql .=' and acao.DS_DENOMINACAO like \'%'. $data['processamento']['dsDescicao']. '%\'';
        }

        if(!empty($data['processamento']['nuPlanoOrcamentario'])){
            $sql .=' and acao.NU_PLANO_ORCAMENTARIO like \'%'. $data['processamento']['nuPlanoOrcamentario']. '%\'';
        }

        $sql .= '
                GROUP BY
                    acao.CO_SEQ_ACAO_ORCAMENTARIA,
                    acao.CO_TIPO_DESPESA,
                    acao.CO_DEPARTAMENTO,
                    acao.NU_ANO_EXERCICIO,
                    acao.NU_ACAO_ORCAMENTARIA,
                    acao.NU_PLANO_ORCAMENTARIO,
                    acao.DS_DENOMINACAO,
                    acao.VL_EXECUT_EXERCICIO_ANTERIOR,
                    acao.VL_APROVADO,
                    acao.VL_BLOQUEADO,
                    acao.VL_ATUALIZADO,
                    acao.VL_CAPITAL,
                    acao.VL_DISPONIVEL,
                    acao.VL_DESPESA_EMPENHADA,
                    acao.VL_DEPESA_EMPENHADA_ALIQUIDAR,
                    acao.VL_DESPESA_LIQUIDADA,
                    acao.VL_DESPESA_PAGA,
                    tpDespesa.DS_TIPO_DESPESA,
                    departamento.DS_DEPARTAMENTO,
                    departamento.SG_DEPARTAMENTO,
                    atividade.VL_EXECUTAR_EXERCICIO,
                    atividade.QT_ATIVIDADE,
                    atividade.VL_PROCESSADO_CGPO
                ORDER BY
                    acao.NU_ACAO_ORCAMENTARIA ASC,
                    acao.NU_PLANO_ORCAMENTARIO ASC,
                    departamento.SG_DEPARTAMENTO ASC';


        $em = $this->getEntityManager();
        $rs = $em->getConnection()->executeQuery($sql, array('stRegistroAtivo' => 'S', 'nuAnoExercicio' => $data['processamento']['nuAnoExercicio']));
        return $rs->fetchAll();
    }

    public function relatorioPorAcao($nuAnoExercicio){

        $rs = $this->createQueryBuilder('a')
            ->select("
                a.id, a.coTipoDespesa, b.dsTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao, a.vlDespesaEmpenhada,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga, d.sgDepartamento,
                GREATEST(nvl(a.vlDespesaEmpenhada, 0), nvl(a.vlDespesaEmpenhadaAliquidar, 0), nvl(a.vlDepesaEmpenhadaLiquidada, 0)) as vlEmpenhado,
                COUNT(c.id) as qtAtividade,
                nvl(SUM(c.vlExecutarExercicio), 0) as vlAtividade,
                a.vlAtualizado - SUM(nvl(c.vlExecutarExercicio, 0)) as vlSaldoAcao,
                SUM(nvl(c.vlProcessadoCgpo, 0)) as vlProcessadoCgpo
                
            ")
            ->leftJoin('Admin\AdminBundle\Entity\TipoDespesa', 'b', 'WITH', 'b.id = a.coTipoDespesa and b.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Admin\AdminBundle\Entity\AtividadePlanoUso', 'c', 'WITH', 'c.coAcaoOrcamentaria = a.id and c.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Admin\AdminBundle\Entity\Departamento', 'd', 'WITH', 'd.id = a.coDepartamento and a.stRegistroAtivo = :stRegistroAtivo')
            ->andWhere('a.nuAnoExercicio = :nuAnoExercicio')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('nuAnoExercicio', $nuAnoExercicio)
            ->setParameter('stRegistroAtivo', 'S')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa
            ')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao, d.sgDepartamento,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga, b.dsTipoDespesa
            ')
            ->orderBy('a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario')
            ->getQuery()
            ->getArrayResult();

        return $rs;
    }

    public function relatorioPorAcaoDepartamento($nuAnoExercicio, $coDepartamento){

        $rs = $this->createQueryBuilder('a')
            ->select("
                a.id, a.coTipoDespesa, b.dsTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                GREATEST(nvl(a.vlDespesaEmpenhada, 0), nvl(a.vlDespesaEmpenhadaAliquidar, 0), nvl(a.vlDepesaEmpenhadaLiquidada, 0)) as vlEmpenhado,
                COUNT(c.id) as qtAtividade,
                nvl(SUM(c.vlExecutarExercicio), 0) as vlAtividade,
                a.vlAtualizado - SUM(nvl(c.vlExecutarExercicio, 0)) as vlSaldoAcao,
                SUM(nvl(c.vlProcessadoCgpo, 0)) as vlProcessadoCgpo
            ")
            ->leftJoin('Admin\AdminBundle\Entity\TipoDespesa', 'b', 'WITH', 'b.id = a.coTipoDespesa and b.stRegistroAtivo = :stRegistroAtivo')
            ->leftJoin('Admin\AdminBundle\Entity\AtividadePlanoUso', 'c', 'WITH', 'c.coAcaoOrcamentaria = a.id and c.coDepartamento = :coDepartamento and c.stRegistroAtivo = :stRegistroAtivo')
            ->innerJoin('Admin\AdminBundle\Entity\RlAcaoOrcamentariaDepartamento', 'd', 'WITH', 'd.coAcaoOrcamentaria = a.id and d.coDepartamento = :coDepartamento and d.stRegistroAtivo = :stRegistroAtivo')
            ->andWhere('a.nuAnoExercicio = :nuAnoExercicio')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('nuAnoExercicio', $nuAnoExercicio)
            ->setParameter('coDepartamento', $coDepartamento)
            ->setParameter('stRegistroAtivo', 'S')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga,
                b.dsTipoDespesa
            ')
            ->groupBy('
                a.id, a.coTipoDespesa, a.coDepartamento, a.nuAnoExercicio, a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario, a.dsDenominacao,
                a.vlExecutadoExercicioAnterior, a.vlAprovado, a.vlBloqueado, a.vlAtualizado, a.vlCapital, a.vlDisponivel, a.vlDespesaEmpenhada,
                a.vlDespesaEmpenhadaAliquidar, a.vlDepesaEmpenhadaLiquidada, a.vlDespesaPaga, b.dsTipoDespesa
            ')
            ->orderBy('a.nuAcaoOrcamentaria, a.nuPlanoOrcamentario')
            ->getQuery()
            ->getArrayResult();

        return $rs;
    }

}
