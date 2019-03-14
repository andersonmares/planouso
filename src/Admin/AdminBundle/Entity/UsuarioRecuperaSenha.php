<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioRecuperaSenha
 *
 * @ORM\Table(name="TB_USUARIO_RECUPERASENHA", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\UsuarioRecuperaSenhaRepository")
 */
class UsuarioRecuperaSenha
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_USUARIO_RECUPERASENHA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="DBPROPOSTASAS.SQ_USURECSENH_COSEQUSURECPSENH")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_USUARIO", type="integer")
     */
    private $coUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_TOKEN", type="string", length=100)
     */
    private $dsToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_VENCIMENTO", type="datetime")
     */
    private $dtVencimento;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_SENHA_ALTERADA", type="string", length=1)
     */
    private $stSenhaAlterada = 'N';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_CADASTRO", type="datetime")
     */
    private $dtCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=1)
     */
    private $stRegistroAtivo = 'S';


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coUsuario
     *
     * @param integer $coUsuario
     *
     * @return UsuarioRecuperaSenha
     */
    public function setCoUsuario($coUsuario)
    {
        $this->coUsuario = $coUsuario;

        return $this;
    }

    /**
     * Get coUsuario
     *
     * @return int
     */
    public function getCoUsuario()
    {
        return $this->coUsuario;
    }

    /**
     * Set dsToken
     *
     * @param string $dsToken
     *
     * @return UsuarioRecuperaSenha
     */
    public function setDsToken($dsToken)
    {
        $this->dsToken = $dsToken;

        return $this;
    }

    /**
     * Get dsToken
     *
     * @return string
     */
    public function getDsToken()
    {
        return $this->dsToken;
    }

    /**
     * Set dtVencimento
     *
     * @param \DateTime $dtVencimento
     *
     * @return UsuarioRecuperaSenha
     */
    public function setDtVencimento($dtVencimento)
    {
        $this->dtVencimento = $dtVencimento;

        return $this;
    }

    /**
     * Get dtVencimento
     *
     * @return \DateTime
     */
    public function getDtVencimento()
    {
        return $this->dtVencimento;
    }

    /**
     * Set stSenhaAlterada
     *
     * @param string $stSenhaAlterada
     *
     * @return UsuarioRecuperaSenha
     */
    public function setStSenhaAlterada($stSenhaAlterada)
    {
        $this->stSenhaAlterada = $stSenhaAlterada;

        return $this;
    }

    /**
     * Get stSenhaAlterada
     *
     * @return string
     */
    public function getStSenhaAlterada()
    {
        return $this->stSenhaAlterada;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     *
     * @return UsuarioRecuperaSenha
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set stRegistroAtivo
     *
     * @param string $stRegistroAtivo
     *
     * @return UsuarioRecuperaSenha
     */
    public function setStRegistroAtivo($stRegistroAtivo)
    {
        $this->stRegistroAtivo = $stRegistroAtivo;

        return $this;
    }

    /**
     * Get stRegistroAtivo
     *
     * @return string
     */
    public function getStRegistroAtivo()
    {
        return $this->stRegistroAtivo;
    }
}

