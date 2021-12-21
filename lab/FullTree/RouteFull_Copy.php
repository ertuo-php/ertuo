<?php

namespace Ertuo\Lab\FullTree;

use Ertuo\GroupInterface;
use Ertuo\Route;

/**
* Route class that stores the complete full tree inside it
*
* @see Ertuo\Lab\Benchmark_Bitbucket_Ertuo_FullTree
*/
class RouteFull_Copy extends Route implements GroupInterface
{
	private $all;

	static function fromArray(array $input) : self
	{
		$full = new self;
		$full->all = $input;

		$full->name = $full->all['name'];
		$full->attributes = $full->all['attributes'];
		$full->rule = $full->all['rule'];
		$full->default = $full->all['default'];

		return $full;
	}

	function readRoute(string $step) : ?Route
	{
		if (empty( $this->all['routes'][ $step ] ))
		{
			return null;
		}

		return self::fromArray( $this->all['routes'][ $step ] );
	}

	function toArray() : array
	{
		return $this->all;
	}
}
