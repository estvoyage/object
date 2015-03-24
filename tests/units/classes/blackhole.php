<?php

namespace estvoyage\object\tests\units;

require __DIR__ . '/../runner.php';

use
	estvoyage\object\tests\units
;

class blackhole extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
		;
	}

	function test__call()
	{
		$this->object($this->newTestedInstance->{uniqid()}(uniqid(), uniqid()))->isTestedInstance;
	}
}
