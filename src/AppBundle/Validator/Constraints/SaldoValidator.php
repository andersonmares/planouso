<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
class SaldoValidator extends ConstraintValidator
{
	//public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters or numbers.';

	public function validate($value, Constraint $constraint)
	{
		if ($value > $constraint->saldo) {
			$this->context->buildViolation($constraint->message)
				->setParameter('{{ saldo }}', number_format($constraint->saldo, 2, ',', '.'))
				->addViolation();
		}
	}
}