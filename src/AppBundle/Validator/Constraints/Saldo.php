<?php
namespace AppBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class Saldo extends Constraint
{
	public $message = 'O valor informado é maior que o saldo disponível R$ "{{ saldo }}".';
	public $saldo;
}