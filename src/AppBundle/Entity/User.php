<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="TB_USUARIO", schema="DBPROPOSTASAS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface
{

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserPF")
     * @ORM\JoinColumn(name="CO_SEQ_USUARIO", referencedColumnName="CO_USUARIO")
     */
    private $pessoaFisica;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PerfilAcesso")
     * @ORM\JoinColumn(name="CO_PERFIL_ACESSO", referencedColumnName="CO_SEQ_PERFIL_ACESSO")
     */
    private $perfilAcesso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_SEQ_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SQ_USUARIO_COSEQUSUARIO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_USUARIO", type="string", length=255, unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_SENHA", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_CADASTRO", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_ATUALIZACAO", type="datetime")
     */
    private $updateAt;

    /**
     * @var array
     *
     * @ORM\Column(name="DS_PAPEL", type="string", length=255)
     */
    private $roles;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_PERFIL_ACESSO", type="integer")
     */
    private $coPerfilAcesso;

    /**
     * @var int
     *
     * @ORM\Column(name="CO_DEPARTAMENTO", type="integer")
     */
    private $coDepartamento;

    /**
     * @var DateTime
     * @ORM\Column(name="DT_ULTIMO_ACESSO", type="datetime")
     */
    private $dtUltimoAcesso;

    /**
     * @var string
     * @ORM\Column(name="DS_IP_ULTIMO_ACESSO", type="string")
     */
    private $dsIpUltimoAcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="ST_REGISTRO_ATIVO", type="string", length=255)
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
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    /**
     * @param \DateTime $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param string $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return ! $this->roles? [] : explode(',', $this->roles);
    }

    /**
     * @return int
     */
    public function getCoPerfilAcesso()
    {
        return $this->coPerfilAcesso;
    }

    /**
     * @param int $coPerfilAcesso
     * @return User
     */
    public function setCoPerfilAcesso($coPerfilAcesso)
    {
        $this->coPerfilAcesso = $coPerfilAcesso;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoDepartamento()
    {
        return $this->coDepartamento;
    }

    /**
     * @param int $coDepartamento
     * @return User
     */
    public function setCoDepartamento($coDepartamento)
    {
        $this->coDepartamento = $coDepartamento;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtUltimoAcesso()
    {
        return $this->dtUltimoAcesso;
    }

    /**
     * @param mixed $dtUltimoAcesso
     * @return User
     */
    public function setDtUltimoAcesso($dtUltimoAcesso)
    {
        $this->dtUltimoAcesso = $dtUltimoAcesso;
        return $this;
    }

    /**
     * @return string
     */
    public function getDsIpUltimoAcesso()
    {
        return $this->dsIpUltimoAcesso;
    }

    /**
     * @param string $dsIpUltimoAcesso
     * @return User
     */
    public function setDsIpUltimoAcesso($dsIpUltimoAcesso)
    {
        $this->dsIpUltimoAcesso = $dsIpUltimoAcesso;
        return $this;
    }

    /**
     * @return string
     */
    public function getStRegistroAtivo()
    {
        return $this->stRegistroAtivo;
    }

    /**
     * @param string $stRegistroAtivo
     */
    public function setStRegistroAtivo($stRegistroAtivo)
    {
        $this->stRegistroAtivo = $stRegistroAtivo;
    }



    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->user;
    }

    public function eraseCredentials()
    {

    }

    /**
     * @return mixed
     */
    public function getPessoaFisica()
    {
        return $this->pessoaFisica;
    }

    /**
     * @param mixed $pessoaFisica
     * @return User
     */
    public function setPessoaFisica($pessoaFisica)
    {
        $this->pessoaFisica = $pessoaFisica;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerfilAcesso()
    {
        return $this->perfilAcesso;
    }

    /**
     * @param mixed $perfilAcesso
     * @return User
     */
    public function setPerfilAcesso($perfilAcesso)
    {
        $this->perfilAcesso = $perfilAcesso;
        return $this;
    }



}

