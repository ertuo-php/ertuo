<?php

namespace Ertuo;

use Ertuo\Route;

trait RouteAwareTrait
{
	protected $route;

	function setRoute(Route $route) : self
	{
		$this->route = $route;
		return $this;
	}

	function getRoute() : Route
	{
		return $this->route;
	}
}
