<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use Ertuo\Dispatcher;
use Ertuo\Kit;
use Ertuo\Route;
use Ertuo\Lab\Benchmark_Bitbucket_Ertuo_Array;

use function file_put_contents;
use function var_export;

abstract class Benchmark_Ertuo_UnfoldedTree extends Benchmark_Bitbucket_Ertuo_Array
{
	protected $routeFullClass;

	protected $unfoldedRoutesFile;

	function __construct()
	{
		$this->unfoldedRoutesFile = __DIR__
			. '/routes/ertuo_unfolded_routes.php';

		if (!is_file($this->unfoldedRoutesFile))
		{
			file_put_contents(
				$this->unfoldedRoutesFile,
				'<?php return '
					. var_export( $this->loadRoutes()->toArray(), true)
					. ';'
				);
		}
	}

	function setupRouting()
	{
		$class = $this->routeFullClass;
		$routes = $class::fromArray( include $this->unfoldedRoutesFile );

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
