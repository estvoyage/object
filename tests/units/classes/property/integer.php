<?php

namespace estvoyage\object\tests\units\property;

require __DIR__ . '/../../runner.php';

use
	estvoyage\object\tests\units
;

class integer extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
			->extends('estvoyage\value\integer')
		;
	}
}
