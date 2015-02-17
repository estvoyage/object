<?php

namespace estvoyage\object\tests\units\property;

require __DIR__ . '/../../runner.php';

use
	estvoyage\object\tests\units
;

class boolean extends units\test
{
	function testClass()
	{
		$this->testedClass
			->isFinal
		;
	}

	function testConstructorWithValidValue()
	{
		$this
			->boolean($this->newTestedInstance->value)->isFalse
			->boolean($this->newTestedInstance(false)->value)->isFalse
			->boolean($this->newTestedInstance(true)->value)->isTrue
		;
	}

	/**
	 * @dataProvider invalidValueProvider
	 */
	function testConstructorWithInvalidValue($invalidValue)
	{
		$this
			->exception(function() use ($invalidValue) {
					$this->newTestedInstance($invalidValue);
				}
			)
				->isInstanceOf('estvoyage\object\exception\domain')
				->hasMessage('Boolean should be true or false')
		;
	}

	protected function invalidValueProvider()
	{
		return [
			'',
			'0',
			'1',
			uniqid(),
			0,
			1,
			rand(2, PHP_INT_MAX),
			rand(- PHP_INT_MAX, -1),
			[ [] ],
			new \stdclass
		];
	}
}
