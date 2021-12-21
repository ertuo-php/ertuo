<?php

namespace Ertuo\Lab;

/**
* Benchmark reading multiple values:
*
*	a) with list() syntax reading all at once
* 	b) reading one property at a time
*
* @Revs(8000)
* @Iterations(5)
*/
class Benchmark_List_vs_Prop
{

	function __construct()
	{
		$this->type = 'direct';
		$this->options = [1,2,3];
		$this->attributes = ['a' => 'b'];
		$this->rule = [$this->type, $this->options, $this->attributes];
	}

	function benchList()
	{
		[$type, $options, $attributes] = $this->rule;
	}

	function benchProp()
	{
		$type = $this->type;
		$options = $this->options;
		$attributes = $this->attributes;
	}

}
