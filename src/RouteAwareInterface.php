<?php

namespace Ertuo;

use Ertuo\RouteAbstract;

interface RouteAwareInterface
{
	function setRoute(RouteAbstract $route) : self;
	function getRoute() : RouteAbstract;
}
