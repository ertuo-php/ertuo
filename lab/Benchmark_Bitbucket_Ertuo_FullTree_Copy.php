<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Ertuo_FullTree;
use Ertuo\Lab\FullTree\RouteFull_Copy;

class Benchmark_Bitbucket_Ertuo_FullTree_Copy extends Benchmark_Ertuo_FullTree
{
	protected $routeFullClass = RouteFull_Copy::class;
}
