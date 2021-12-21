<?php

namespace Ertuo;

use Ertuo\DispatcherInterface;
use Ertuo\Result;
use Ertuo\Route;
use Ertuo\RouteAwareInterface;
use Ertuo\Rule\CanHandleInterface;
use Ertuo\Rule\DefaultAggregate as DefaultRuleAggregate;
use Ertuo\Rule\AggregateInterface as RuleAggregate;

use function array_merge;
use function array_shift;

class Dispatcher implements DispatcherInterface
{
	protected $routes;

	function __construct(Route $routes, RuleAggregate $rules = null)
	{
		$this->routes = $routes;
		$this->rules = $rules ?? new DefaultRuleAggregate;
	}

	function getRules() : RuleAggregate
	{
		return $this->rules;
	}

	function dispatch(array $source, Result $result = null) : Result
	{
		$result = $result ?? new Result;

		$routes = $this->routes;
		while ($routes)
		{
			// must be able to work with empty source
			//
			$current = current($source) ?: '';

			$next = null;

			[$step, $attributes] = $routes->default;
			if ($current)
			{
				[$type, $options, $extra] = $routes->rule;
				$found = false;

				// seek direct match
				//
				if ('' == $type)
				{
					$next = $routes->readRoute( $current );
					$found = !empty($next);
				} else
				{
					$rule = $this->rules->fetchRule($type);

					if ($rule instanceOf RouteAwareInterface)
					{
						$rule->setRoute($routes);
					}

					$found = $rule->isValid($current, $options, clone $result);
				}

				// match is found, "consume" the current step
				//
				if ($found)
				{
					$result->path[] = $current;
					array_shift($source);

					$step = $current;
					$attributes = $extra;
				}
			}

			// allow rules to handle the result and to determine next route
			//
			if (!empty($rule) && $rule instanceOf CanHandleInterface)
			{
				$routes = $rule->handle($current, $step, $attributes, $result);
			} else
			{
				if ($step && $routes->name)
				{
					$result->attributes[ $routes->name ] = $step;
				}

				if (!empty($attributes))
				{
					$result->attributes = !empty($result->attributes)
						?  array_merge(
							$result->attributes,
							$attributes
							)
						: $attributes;
				}

				if (!empty($next))
				{
					$routes = $next;
				} else
				{
					$routes = ($step && ( $next = $routes->readRoute( $step ) ) )
					 	? $next
						: $routes->readRoute( '' );
				}

				// $routes = ($step && ( $next = $routes->readRoute( $step ) ) )
				//  	? $next
				// 	: $routes->readRoute( '' );
			}

			// attributes associated with the new route ?
			//
			if (!empty($routes->attributes))
			{
				$result->attributes = !empty($result->attributes)
					? array_merge(
						$result->attributes,
						$routes->attributes
						)
					: $routes->attributes;
			}

			// no place to go
			//
			if (empty($routes->rule) && empty($routes->default))
			{
				break;
			}
		}

		// whatever is left in $source return it as junk
		//
		$result->junk = $source;
		return $result;
	}
}
