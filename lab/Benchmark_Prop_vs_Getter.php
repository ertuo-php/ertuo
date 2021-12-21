<?php

namespace Ertuo\Lab;

/**
* Benchmark reading public properties directly vs using a getter method
*
* @Revs(4000)
* @Iterations(5)
*/
class Benchmark_Prop_vs_Getter
{
	function getObject()
	{
		$object = new class {
			public $prop = 123;

			function getProp()
			{
				return $this->prop;
			}
		};

		return $object;
	}

	function benchGetter()
	{
		$object = $this->getObject();
		$prop = $object->getProp();
	}

	function benchProp()
	{
		$object = $this->getObject();
		$prop = $object->prop;
	}
}
