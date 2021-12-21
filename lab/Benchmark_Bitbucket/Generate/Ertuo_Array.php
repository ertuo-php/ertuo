<?php

namespace Ertuo\Lab\Benchmark_Bitbucket\Generate;

class Ertuo_Array extends Ertuo
{
	function generateRoutes($tree, $prefix, $tabs) : string
	{
		$next_tabs = $tabs . static::TAB . static::TAB;

		$php = '';

		// KT: separate params from static
		//
		$static = $params = $routes = [];
		foreach ($tree as $key => $steps)
		{
			$key_id = $this->keyID($key);

			if ($key == $key_id)
			{
				$static[ $key ] = $steps;
			} else
			{
				$params[ $key_id ] = $steps;
			}

			// compose routing
			//
			$route = $prefix
				? "{$prefix}_{$key_id}"
				: $key;
			$route_id = $this->routeID( $route );

			$routes[ $key_id ] = $route_id;
		}

		if ($static)
		{
			$php .= $this->openGroup($tabs);

			foreach ($static as $key_id => $steps)
			{
				$route_id = $routes[ $key_id ];
				$php .= $next_tabs
					. "'{$key_id}' => Route::add('', ['_route' => '{$route_id}'])"
					;

				if ($steps)
				{
					$php .= $this->generateRoutes(
						$steps,
						$route_id,
						$next_tabs
						);
				}

				$php .= ",\n\n";
			}

			$php .= $this->closeGroup($tabs);
		}

		if ($params)
		{
			$route_id = $routes[ key($params) ];
			$php .=	"\n" . $tabs
				. "->rule('any', [], ['_route' => '{$route_id}'])";

			$params = array_filter($params);
		}

		if ($params)
		{
			$php .= $this->openGroup($tabs);

			$php .= $next_tabs
				. " '' => Route::add()";

			foreach ($params as $key_id => $steps)
			{
				$php .=  $next_tabs
					. $this->generateRoutes(
						$steps,
						$routes[ $key_id ],
						$next_tabs
					);
			}

			$php .= ",\n";

			$php .= $this->closeGroup($tabs);
		}

		return $php;
	}

	function openGroup($tabs)
	{
		return "\n"
			. $tabs . '->group(function()' . "\n"
			. $tabs . '{' . "\n"
			. $tabs . static::TAB  . 'return array(' . "\n";
	}

	function closeGroup($tabs)
	{
		return ''
			. $tabs . static::TAB . ');' . "\n"
			. $tabs . '})';
	}
}
