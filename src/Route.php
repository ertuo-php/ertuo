<?php

namespace Ertuo;

use Ertuo\ExportInterface;
use Ertuo\MethodTrait;
use Ertuo\RouteAbstract;

class Route extends RouteAbstract implements ExportInterface
{
	use MethodTrait;

	/**
	* @var array of callbacks used to declaring all of the nested routes
	* @see Ertuo\Route::group()
	*/
	protected $groups = array();

	/**
	* Introduce a callback for declaring group of nested routes
	*
	* @param callable $group
	* @return self
	*/
	function group(callable $group) : self
	{
		$this->groups[] = $group;
		return $this;
	}

	/**
	* @var RouteAbstract already known empty route
	*/
	protected $empty;

	/**
	* @var RouteAbstract already known non-empty route
	*/
	protected $route;

	/**
	* Read a nested route identified by $step
	*
	* @param string $step value of current step from the source array
	* @return null|RouteAbstract
	*/
	function readRoute(string $step) : ?RouteAbstract
	{
		if (!empty($step))
		{
			if (!empty($this->route))
			{
				return $this->route;
			}
		} else
		{
			if (!empty($this->empty))
			{
				return $this->empty;
			}
		}

		foreach($this->groups as $group)
		{
			$routes = $group($this);
			foreach ($routes as $key => $route)
			{
				if (!$route instanceOf RouteAbstract)
				{
					continue;
				}

				if ($key == '')
				{
					$this->empty = $route;
					if (!$step)
					{
						return $this->empty;
					}
				} else
				if ($key == $step)
				{
					return $this->route = $route;
				}
			}
		}

		return null;
	}

	/**
	* @see ExportInterface::toArray()
	*/
	function toArray() : array
	{
		$export = array(
			'name' => $this->name,
			'attributes' => $this->attributes,
			'rule' => $this->rule,
			'default' => $this->default,
			'routes' => [],
		);

		foreach($this->groups as $group)
		{
			$routes = $group($this);
			foreach ($routes as $key => $route)
			{
				if (!$route instanceOf RouteAbstract)
				{
					continue;
				}

				$export['routes'][ $key ] = $route->toArray();
			}
		}

		return $export;
	}
}
