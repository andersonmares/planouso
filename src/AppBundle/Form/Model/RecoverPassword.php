<?php
namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class RecoverPassword
{
    /**
     * @Assert\Length(
     *     min = 6,
     *     minMessage = "A senha deve ter pelo menos 6 caracteres"
     * )
     */
    protected $newPassword;

    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param mixed $newPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }



}