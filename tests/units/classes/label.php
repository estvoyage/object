<?php

namespace estvoyage\object\tests\units;

require __DIR__ . '/../runner.php';

use
	estvoyage\object\tests\units
;

class label extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isAbstract()
			->extends('estvoyage\value\string')
		;
	}
}
