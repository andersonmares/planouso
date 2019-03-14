<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
class CheckboxValidator extends ConstraintValidator
{
	//public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters or numbers.';

	public function validate($value, Constraint $constraint)
	{
		if (count($value) == 0) {
			$this->context->buildViolation($constraint->message)
				->addViolation();
		}
	}
}