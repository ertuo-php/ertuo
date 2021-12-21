<?php

namespace Ertuo\Lab;

/**
* Benchmark creating new objects instances vs cloning
*
* @Revs(4000)
* @Iterations(5)
*/
class Benchmark_New_vs_Clone
{
	public $name;
	public $attributes;

	function __construct($name = '', $attributes = [])
	{
		$this->name = $name;
		$this->attributes = $attributes;
	}

	function benchNew()
	{
		new self('name', ['attributes']);
	}

	function benchClone()
	{
		$object = clone $this;
		$object->name = 'name';
		$object->attributes = ['attributes'];
	}
}
