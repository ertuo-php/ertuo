<?php

namespace Ertuo;

use Ertuo\Route;

interface GroupInterface
{
	function readRoute(string $step) : ?Route;
}
