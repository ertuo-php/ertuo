<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\RouteAwareInterface;
use Ertuo\RouteAwareTrait;
use Ertuo\RouteAbstract;
use Ertuo\Rule\CanHandleInterface;
use Ertuo\Rule\RuleInterface;

use function in_array;

class PathRule implements RuleInterface, CanHandleInterface, RouteAwareInterface
{
	use RouteAwareTrait;

	function accept(string $key, array $until, Result $result) : bool
	{
		return !in_array($key, $until);
	}

	function handle(string $current, string $step, array $attributes, Result $result) : ?RouteAbstract
	{
		$route = $this->getRoute();

		if ($step && $route->key)
		{
			if (($current == $step) || empty($result->attributes[ $route->key ]))
			{
				$result->attributes[ $route->key ][] = $step;
			}
		}

		if (!empty($attributes))
		{
			$result->attributes = $result->attributes
				?  array_merge(
					$result->attributes,
					$attributes
					)
				: $attributes;
		}

		// last step, or the default kicking in...
		//
		if (!$step || $current != $step)
		{
			return $route->readRoute( '' );
		}

		return $route;
	}
}
