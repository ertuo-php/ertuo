<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use Ertuo\Dispatcher;
use Ertuo\Kit;
use Ertuo\Route;

abstract class Benchmark_Ertuo extends Benchmark
{
	function setupRouting()
	{
		return new Dispatcher( $this->loadRoutes() );
	}

	function runRouting($route) : array
	{
		$source = Kit::quickExplode($route);

		$dispatcher = $this->setupRouting();
		$result = $dispatcher->dispatch($source);

		return $result->attributes;
	}

	abstract function loadRoutes() : Route;
}
