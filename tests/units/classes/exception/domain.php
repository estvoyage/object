<?php

namespace estvoyage\object\tests\units\exception;

require __DIR__ . '/../../runner.php';

use
	estvoyage\object\tests\units
;

class domain extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
			->extends('domainException')
			->implements('estvoyage\object\exception')
		;
	}
}
