<?php

namespace Ertuo;

use Ertuo\MethodTrait;
use Ertuo\RouteAbstract;

class Route extends RouteAbstract
{
	use MethodTrait;

	protected $groups = array();

	function group(callable $group) : self
	{
		$this->groups[] = $group;
		return $this;
	}

	protected $empty;

	protected $route;

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
