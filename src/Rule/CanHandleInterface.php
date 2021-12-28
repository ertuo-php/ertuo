<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\RouteAbstract;

interface CanHandleInterface
{
	function handle(string $current, string $step, array $attributes, Result $result) : ?RouteAbstract;
}
