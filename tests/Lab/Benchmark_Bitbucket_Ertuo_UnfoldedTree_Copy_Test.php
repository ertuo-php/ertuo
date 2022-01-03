<?php

namespace Ertuo\Tests\Lab;

use Ertuo\Lab\Benchmark_Bitbucket_Ertuo_UnfoldedTree_Copy;

class Benchmark_Bitbucket_Ertuo_UnfoldedTree_Copy_Test extends Benchmark_Bitbucket_Test
{
	function testBenchmark()
	{
		return $this->benchmark( new Benchmark_Bitbucket_Ertuo_UnfoldedTree_Copy );
	}
}
