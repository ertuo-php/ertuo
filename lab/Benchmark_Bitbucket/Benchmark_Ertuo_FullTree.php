<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use Ertuo\Dispatcher;
use Ertuo\Kit;
use Ertuo\Route;
use Ertuo\Lab\Benchmark_Bitbucket_Ertuo_Array;

use function file_put_contents;
use function var_export;

abstract class Benchmark_Ertuo_FullTree extends Benchmark_Bitbucket_Ertuo_Array
{
	protected $routeFullClass;

	protected $cachedRoutesFile;

	function __construct()
	{
		file_put_contents(
			$this->cachedRoutesFile = __DIR__
				. '/routes/ertuo_full_routes.php',
			$this->dump( $this->loadRoutes() )
			);
	}

	function dump(Route $routes) : string
	{
		return '<?php return '
			. var_export( $routes->toArray(), true)
			. ';';
	}

	function setupRouting()
	{
		$class = $this->routeFullClass;
		$routes = $class::fromArray( include $this->cachedRoutesFile );

		return new Dispatcher($routes);
	}

	function runRouting($route) : array
	{
		$source = Kit::quickExplode($route);

		$dispatcher = $this->setupRouting();
		$result = $dispatcher->dispatch($source);

		return $result->attributes;
	}
}
