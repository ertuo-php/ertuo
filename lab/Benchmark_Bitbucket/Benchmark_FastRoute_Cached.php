<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use function FastRoute\cachedDispatcher;

use function get_called_class;
use function sprintf;
use function strtolower;
use function substr;

abstract class Benchmark_FastRoute_Cached extends Benchmark_FastRoute
{
	protected $dataGeneratorClass;
	protected $dispatcherClass;

	protected $cached_routes;

	function __construct()
	{
		$this->cached_routes = __DIR__
			. '/routes/fastroute_cached_routes.%s.php';
	}

	function setupRouting()
	{
		return cachedDispatcher(
			[$this, 'loadedRoutes'], [
			'dataGenerator' => $this->dataGeneratorClass,
	                'dispatcher' => $this->dispatcherClass,
			'cacheFile' => sprintf(
				$this->cached_routes,
				strtolower(substr(get_called_class(), 47))
				)
			]);
	}

	function runRouting($route) : array
	{
		$dispatcher = $this->setupRouting();

		return array('_route' => $dispatcher->dispatch('GET', $route)[1]);
	}
}
