<?php

namespace Ertuo;

use Ertuo\Route;

interface RouteAwareInterface
{
	function setRoute(Route $route) : self;
	function getRoute() : Route;
}
