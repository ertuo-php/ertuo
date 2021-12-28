<?php

namespace Ertuo;

use Ertuo\RouteAbstract;

trait RouteAwareTrait
{
	protected $route;

	function setRoute(RouteAbstract $route) : self
	{
		$this->route = $route;
		return $this;
	}

	function getRoute() : RouteAbstract
	{
		return $this->route;
	}
}
