<?php

namespace estvoyage\object;

final class property extends label
{
	function __construct($value)
	{
		try
		{
			parent::__construct($value);
		}
		catch (\exception $exception)
		{
			throw new exception\domain('Property should be a string matching [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
		}
	}
}
