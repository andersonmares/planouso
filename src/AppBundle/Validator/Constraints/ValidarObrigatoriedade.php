<?php
namespace AppBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class ValidarObrigatoriedade extends Constraint
{
	public $message = 'Selecione pelo menos um item na lista abaixo!';
}