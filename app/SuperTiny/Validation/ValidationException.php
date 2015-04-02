<?php namespace SuperTiny\Validation;

class ValidationException extends \Exception
{
	protected $errors;

	public function __construct($errors)
	{
		$this->errors = $errors;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}

 ?>