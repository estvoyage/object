<?php

namespace estvoyage\object\property;

use
	estvoyage\object
;

final class boolean
{
	use \estvoyage\value\immutable;

	function __construct($value = false)
	{
		if (! self::validate($value))
		{
			throw new object\exception\domain('Boolean should be true or false');
		}

		$this->init([ 'value' => $value ]);
	}

	static function validate($value)
	{
		return is_bool($value);
	}
}
