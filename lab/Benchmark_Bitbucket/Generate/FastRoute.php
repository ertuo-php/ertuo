<?php

namespace Ertuo\Lab\Benchmark_Bitbucket\Generate;

class FastRoute
{
	const TAB = '	';

	function __construct(array $lines)
	{
		$class = 'Benchmark_FastRoute';

		file_put_contents(
			$file = dirname(__DIR__) . "/{$class}.php",
			$this->generateSourceCode( $class, $lines )
		);

		echo "> {$file}\n";
	}

	function generateSourceCode($class, $lines)
	{
		$php = '<?php' . "\n"
		. "\n"

		. "namespace Ertuo\Lab\Benchmark_Bitbucket;\n"
		. "\n"

		. "use FastRoute\RouteCollector;\n"
		. "\n"

		. "abstract class {$class} extends Benchmark\n"
		. "{\n"

		. static::TAB . "function loadedRoutes(RouteCollector \$routes) : RouteCollector\n"
		. static::TAB . "{\n" ;

		foreach ($lines as $line)
		{
			$route = rtrim($line);

			$name = preg_replace('#\W+#', '_', $route);
			$name = trim($name, '_');

			$php .= static::TAB . static::TAB
				. "\$routes->addRoute('GET', '{$route}', '{$name}');"
				. "\n";
		}

		$php .= "\n"
		. static::TAB . static::TAB . 'return $routes;' . "\n"
		. static::TAB . "}\n"
		. "}\n";

		return $php;
	}
}
