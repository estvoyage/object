<?php

namespace estvoyage\object;

final class blackhole
{
	function __call($method, $arguments)
	{
		return $this;
	}
}
