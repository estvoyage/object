<?php

namespace estvoyage\object;

abstract class label extends \estvoyage\value\string
{
	function __construct($value)
	{
		$domainException = null;

		try
		{
			parent::__construct($value);
		}
		catch (\exception $domainException) {}

		if ($domainException || ! self::isPhpLabel($value))
		{
			throw new exception\domain('Label should be a string matching [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
		}
	}

	static function validate($value)
	{
		return parent::validate($value) && self::isPhpLabel($value);
	}

	private static function isPhpLabel($value)
	{
		return preg_match('/^[a-z_\x7f-\xff][a-z0-9_\x7f-\xff]*$/ui', $value);
	}
}
