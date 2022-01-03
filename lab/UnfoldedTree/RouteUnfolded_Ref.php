<?php

namespace Ertuo\Lab\UnfoldedTree;

use Ertuo\RouteAbstract;

/**
* Route class that stores the complete unfolded tree inside it
*
* @see Ertuo\Lab\Benchmark_Bitbucket_Ertuo_UnfoldedTree
*/
class RouteUnfolded_Ref extends RouteAbstract
{
	private $all;

	static function fromArray(array $input) : self
	{
		$full = new self;
		$full->all = $input;

		return $full->assign();
	}

	protected function assign() : self
	{
		$this->key =& $this->all['key'];
		$this->attributes =& $this->all['attributes'];
		$this->rule =& $this->all['rule'];
		$this->default =& $this->all['default'];

		return $this;
	}

	function readRoute(string $step) : ?RouteAbstract
	{
		if (empty( $this->all['routes'][ $step ] ))
		{
			return null;
		}

		$route = new self;
		$route->all =& $this->all['routes'][ $step ];
		return $route->assign();
	}

	function toArray() : array
	{
		return $this->all;
	}
}
