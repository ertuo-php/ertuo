<?php

namespace Ertuo\Lab\Benchmark_Bitbucket\Generate;

abstract class Ertuo
{
	const TAB = '    ';

	function __construct(array $lines)
	{
		$caller = get_called_class();
		$class = 'Benchmark_Bitbucket_' . substr($caller, 39);

		$tree = $this->readTree( $lines );

		file_put_contents(
			$file = dirname(__DIR__, 2) . "/{$class}.php",
			$this->generateSourceCode( $class, $tree )
		);

		echo "> {$file}\n";
	}

	function readTree(array $lines)
	{
		$tree = array();

		foreach ($lines as $uri)
		{
			$steps = explode('/', trim(rtrim($uri), '/'));

			$current =& $tree;
			foreach($steps as $step)
			{
				if (!isset($current[$step]))
				{
					$current[$step] = [];
				}

				$current =& $current[$step];
			}
		}

		// $tree = array('teams' => $tree['teams']);
		// print_r($tree);exit;

		return $tree;
	}

	function generateSourceCode($class, $tree)
	{
		return '<?php' . "\n"
		. "\n"

		. "namespace Ertuo\Lab;\n"
		. "\n"

		. "use Ertuo\RouteGroup as Route;\n"
		. "use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Ertuo;\n"
		. "\n"

		. "class {$class} extends Benchmark_Ertuo\n"
		. "{\n"

		. static::TAB . "function loadRoutes() : Route \n"
		. static::TAB . "{\n"

		. static::TAB . static::TAB . '$routes = Route::add()'
		. $this->generateRoutes($tree, '', static::TAB . static::TAB )
		. ";\n"
		. "\n"

		. static::TAB . static::TAB . 'return $routes;' . "\n"
		. static::TAB . "}\n"
		. "}\n";
		;
	}

	function keyID($key)
	{
		return trim($key, '{}.');
	}

	function routeID($route)
	{
		return str_replace(['-', '.', '{', '}'], ['_', '_', '', ''], $route);
	}

	abstract function generateRoutes($tree, $prefix, $tabs) : string ;
}
