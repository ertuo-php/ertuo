<?php

namespace Ertuo\Lab\UnfoldedTree;

use Ertuo\RouteAbstract;

/**
* Route class that stores the complete unfolded tree inside it
*
* @see Ertuo\Lab\Benchmark_Bitbucket_Ertuo_UnfoldedTree
*/
class RouteUnfolded_Copy extends RouteAbstract
{
	private $all;

	static function fromArray(array $input) : self
	{
		$full = new self;
		$full->all = $input;

		$full->key = $full->all['key'];
		$full->attributes = $full->all['attributes'];
		$full->rule = $full->all['rule'];
		$full->default = $full->all['default'];

		return $full;
	}

	function readRoute(string $step) : ?RouteAbstract
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
