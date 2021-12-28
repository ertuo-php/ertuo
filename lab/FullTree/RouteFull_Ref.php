<?php

namespace Ertuo\Lab\FullTree;

use Ertuo\RouteAbstract;

/**
* Route class that stores the complete full tree inside it
*
* @see Ertuo\Lab\Benchmark_Bitbucket_Ertuo_FullTree
*/
class RouteFull_Ref extends RouteAbstract
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
		$this->name =& $this->all['name'];
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
