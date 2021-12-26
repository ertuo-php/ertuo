<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute;
use function FastRoute\simpleDispatcher;

abstract class Benchmark_FastRoute_Simple extends Benchmark_FastRoute
{
	protected $dataGeneratorClass;
	protected $dispatcherClass;

	function setupRouting()
	{
		return simpleDispatcher(
			[$this, 'loadedRoutes'], [
			'dataGenerator' => $this->dataGeneratorClass,
	                'dispatcher' => $this->dispatcherClass
			]);
	}

	function runRouting($route) : array
	{
		$dispatcher = $this->setupRouting();

		return $dispatcher->dispatch('GET', $route)[1];
	}
}
