<?php

namespace estvoyage\object;

interface storer
{
	function typeIs(type $type);
	function stringPropertyHasValue(property $property, property\string $string);
	function integerPropertyHasValue(property $property, property\integer $integer);
	function floatPropertyHasValue(property $property, property\float $float);
	function booleanPropertyHasValue(property $property, property\boolean $boolean);
	function storablePropertyHasValue(property $property, property\storable $storable);
	function nullProperty(property $property);
}
