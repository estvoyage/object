<?php

namespace estvoyage\object;

interface storer
{
	function objectTypeIs(type $type);
	function stringObjectPropertyHasValue(property $property, property\string $string);
	function integerObjectPropertyHasValue(property $property, property\integer $integer);
	function floatObjectPropertyHasValue(property $property, property\float $float);
	function booleanObjectPropertyHasValue(property $property, property\boolean $boolean);
	function storableObjectPropertyHasValue(property $property, storable $storable);
	function nullObjectProperty(property $property);
}
