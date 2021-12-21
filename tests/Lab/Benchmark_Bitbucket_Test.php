<?php

namespace Ertuo\Tests\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark;
use PHPUnit\Framework\TestCase;

abstract class Benchmark_Bitbucket_Test extends TestCase
{
	function benchmark(Benchmark $benchmark)
	{
		foreach ($benchmark->getRoutes() as $args)
		{
			$this->assertEquals(
				$args['result']['_route'],
				$benchmark->runRouting( $args['route'] )['_route']
				);
		}
	}
}
