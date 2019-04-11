<?php

namespace Proxies\__CG__\Admin\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AcaoOrcamentaria extends \Admin\AdminBundle\Entity\AcaoOrcamentaria implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'id', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coUsuario', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coTipoDespesa', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coDepartamento', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuAnoExercicio', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuAcaoOrcamentaria', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuPlanoOrcamentario', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dsDenominacao', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlExecutadoExercicioAnterior', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlAprovado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlBloqueado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlAtualizado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlCapital', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDisponivel', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaEmpenhada', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaEmpenhadaAliquidar', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDepesaEmpenhadaLiquidada', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaPaga', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dtCadastro', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dtAtualizacao', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'stRegistroAtivo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'id', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coUsuario', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coTipoDespesa', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'coDepartamento', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuAnoExercicio', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuAcaoOrcamentaria', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'nuPlanoOrcamentario', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dsDenominacao', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlExecutadoExercicioAnterior', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlAprovado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlBloqueado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlAtualizado', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlCapital', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDisponivel', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaEmpenhada', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaEmpenhadaAliquidar', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDepesaEmpenhadaLiquidada', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'vlDespesaPaga', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dtCadastro', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'dtAtualizacao', '' . "\0" . 'Admin\\AdminBundle\\Entity\\AcaoOrcamentaria' . "\0" . 'stRegistroAtivo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AcaoOrcamentaria $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoUsuario($coUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoUsuario', [$coUsuario]);

        return parent::setCoUsuario($coUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoUsuario', []);

        return parent::getCoUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoTipoDespesa($coTipoDespesa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoTipoDespesa', [$coTipoDespesa]);

        return parent::setCoTipoDespesa($coTipoDespesa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoTipoDespesa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoTipoDespesa', []);

        return parent::getCoTipoDespesa();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoDepartamento($coDepartamento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoDepartamento', [$coDepartamento]);

        return parent::setCoDepartamento($coDepartamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoDepartamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoDepartamento', []);

        return parent::getCoDepartamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuAnoExercicio($nuAnoExercicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuAnoExercicio', [$nuAnoExercicio]);

        return parent::setNuAnoExercicio($nuAnoExercicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuAnoExercicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuAnoExercicio', []);

        return parent::getNuAnoExercicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuAcaoOrcamentaria($nuAcaoOrcamentaria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuAcaoOrcamentaria', [$nuAcaoOrcamentaria]);

        return parent::setNuAcaoOrcamentaria($nuAcaoOrcamentaria);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuAcaoOrcamentaria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuAcaoOrcamentaria', []);

        return parent::getNuAcaoOrcamentaria();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuPlanoOrcamentario($nuPlanoOrcamentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuPlanoOrcamentario', [$nuPlanoOrcamentario]);

        return parent::setNuPlanoOrcamentario($nuPlanoOrcamentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuPlanoOrcamentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuPlanoOrcamentario', []);

        return parent::getNuPlanoOrcamentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setDsDenominacao($dsDenominacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDsDenominacao', [$dsDenominacao]);

        return parent::setDsDenominacao($dsDenominacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDsDenominacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDsDenominacao', []);

        return parent::getDsDenominacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlExecutadoExercicioAnterior($vlExecutadoExercicioAnterior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlExecutadoExercicioAnterior', [$vlExecutadoExercicioAnterior]);

        return parent::setVlExecutadoExercicioAnterior($vlExecutadoExercicioAnterior);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlExecutadoExercicioAnterior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlExecutadoExercicioAnterior', []);

        return parent::getVlExecutadoExercicioAnterior();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlAprovado($vlAprovado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlAprovado', [$vlAprovado]);

        return parent::setVlAprovado($vlAprovado);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlAprovado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlAprovado', []);

        return parent::getVlAprovado();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlBloqueado($vlBloqueado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlBloqueado', [$vlBloqueado]);

        return parent::setVlBloqueado($vlBloqueado);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlBloqueado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlBloqueado', []);

        return parent::getVlBloqueado();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlAtualizado($vlAtualizado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlAtualizado', [$vlAtualizado]);

        return parent::setVlAtualizado($vlAtualizado);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlAtualizado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlAtualizado', []);

        return parent::getVlAtualizado();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlCapital($vlCapital)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlCapital', [$vlCapital]);

        return parent::setVlCapital($vlCapital);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlCapital()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlCapital', []);

        return parent::getVlCapital();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlDisponivel($vlDisponivel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlDisponivel', [$vlDisponivel]);

        return parent::setVlDisponivel($vlDisponivel);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlDisponivel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlDisponivel', []);

        return parent::getVlDisponivel();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlDespesaEmpenhada($vlDespesaEmpenhada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlDespesaEmpenhada', [$vlDespesaEmpenhada]);

        return parent::setVlDespesaEmpenhada($vlDespesaEmpenhada);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlDespesaEmpenhada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlDespesaEmpenhada', []);

        return parent::getVlDespesaEmpenhada();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlDespesaEmpenhadaAliquidar($vlDespesaEmpenhadaAliquidar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlDespesaEmpenhadaAliquidar', [$vlDespesaEmpenhadaAliquidar]);

        return parent::setVlDespesaEmpenhadaAliquidar($vlDespesaEmpenhadaAliquidar);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlDespesaEmpenhadaAliquidar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlDespesaEmpenhadaAliquidar', []);

        return parent::getVlDespesaEmpenhadaAliquidar();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlDepesaEmpenhadaLiquidada($vlDepesaEmpenhadaLiquidada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlDepesaEmpenhadaLiquidada', [$vlDepesaEmpenhadaLiquidada]);

        return parent::setVlDepesaEmpenhadaLiquidada($vlDepesaEmpenhadaLiquidada);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlDepesaEmpenhadaLiquidada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlDepesaEmpenhadaLiquidada', []);

        return parent::getVlDepesaEmpenhadaLiquidada();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlDespesaPaga($vlDespesaPaga)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlDespesaPaga', [$vlDespesaPaga]);

        return parent::setVlDespesaPaga($vlDespesaPaga);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlDespesaPaga()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlDespesaPaga', []);

        return parent::getVlDespesaPaga();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtCadastro($dtCadastro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtCadastro', [$dtCadastro]);

        return parent::setDtCadastro($dtCadastro);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtCadastro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtCadastro', []);

        return parent::getDtCadastro();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtAtualizacao($dtAtualizacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtAtualizacao', [$dtAtualizacao]);

        return parent::setDtAtualizacao($dtAtualizacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtAtualizacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtAtualizacao', []);

        return parent::getDtAtualizacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setStRegistroAtivo($stRegistroAtivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStRegistroAtivo', [$stRegistroAtivo]);

        return parent::setStRegistroAtivo($stRegistroAtivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getStRegistroAtivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStRegistroAtivo', []);

        return parent::getStRegistroAtivo();
    }

}