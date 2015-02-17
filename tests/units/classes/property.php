<?php

namespace estvoyage\object\tests\units;

require __DIR__ . '/../runner.php';

use
	estvoyage\object\tests\units
;

class property extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
			->extends('estvoyage\object\label')
		;
	}

	/**
	 * @dataProvider invalidValueProvider
	 */
	function testConstructorWithInvalidValue($invalidValue)
	{
		$this->exception(function() use ($invalidValue) { $this->newTestedInstance($invalidValue); })
			->isInstanceOf('estvoyage\object\exception\domain')
			->hasMessage('Property should be a string matching [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*')
		;
	}

	protected function invalidValueProvider()
	{
		return [
			uniqid() . ' ' . uniqid(),
			rand(0, PHP_INT_MAX),
			'-' . uniqid()
		];
	}
}
