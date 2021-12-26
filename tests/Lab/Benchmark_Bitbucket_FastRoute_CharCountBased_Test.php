<?php

namespace Ertuo\Tests\Lab;

use Ertuo\Lab\Benchmark_Bitbucket_FastRoute_CharCountBased;

class Benchmark_Bitbucket_FastRoute_CharCountBased_Test extends Benchmark_Bitbucket_Test
{
	function testBenchmark()
	{
		return $this->benchmark( new Benchmark_Bitbucket_FastRoute_CharCountBased );
	}
}
