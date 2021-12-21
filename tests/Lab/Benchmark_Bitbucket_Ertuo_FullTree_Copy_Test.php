<?php

namespace Ertuo\Tests\Lab;

use Ertuo\Lab\Benchmark_Bitbucket_Ertuo_FullTree_Copy;

class Benchmark_Bitbucket_Ertuo_FullTree_Copy_Test extends Benchmark_Bitbucket_Test
{
	function testBenchmark()
	{
		return $this->benchmark( new Benchmark_Bitbucket_Ertuo_FullTree_Copy );
	}
}
