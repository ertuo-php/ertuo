<?php

namespace Ertuo;

use Ertuo\RouteAbstract;

interface GroupInterface
{
	function readRoute(string $step) : ?RouteAbstract;
}
