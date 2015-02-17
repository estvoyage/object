<?php

namespace estvoyage\object\tests\units\property;

require __DIR__ . '/../../runner.php';

use
	estvoyage\object\tests\units
;

class float extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
			->extends('estvoyage\value\float')
		;
	}
}
