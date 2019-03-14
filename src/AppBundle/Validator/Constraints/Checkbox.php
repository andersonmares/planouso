<?php
namespace AppBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class Checkbox extends Constraint
{
	public $message = 'Selecione pelo menos um item na lista abaixo!';
}