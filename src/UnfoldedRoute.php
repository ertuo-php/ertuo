<?php

namespace Ertuo;

use Ertuo\RouteAbstract;
use Ertuo\ExportInterface;

/**
* Route class that stores the complete unfolded tree inside it
*/
class UnfoldedRoute extends RouteAbstract implements ExportInterface
{
	/**
	* @var array the completely unfolded route tree
	*/
	protected $unfolded;

	/**
	* Creates a new {@link UnfoldedRoute} from $tree
	*
	* @param array $tree routes tree array, like the output
	*	from {@link ExportInterface::toArray()}
	* @return self
	*
	* @see ExportInterface::toArray()
	*/
	static function fromArray(array $tree) : self
	{
		static $prototype;
		if (!$prototype)
		{
			$prototype = new self;
		}

		// cloning is faster than instantiating,
		// check Ertuo\Lab\New_vs_Clone
		//
		$route = clone $prototype;
		$route->unfolded = $tree;

		$route->key = $route->unfolded['key'];
		$route->attributes = $route->unfolded['attributes'];
		$route->rule = $route->unfolded['rule'];
		$route->default = $route->unfolded['default'];

		return $route;
	}

	/**
	* Read a nested route identified by $step
	*
	* @param string $step value of current step from the source array
	* @return null|RouteAbstract
	*/
	function readRoute(string $step) : ?RouteAbstract
	{
		if (empty( $this->unfolded['routes'][ $step ] ))
		{
			return null;
		}

		return static::fromArray( $this->unfolded['routes'][ $step ] );
	}

	/**
	* @see ExportInterface::toArray()
	*/
	function toArray() : array
	{
		return $this->unfolded;
	}
}
