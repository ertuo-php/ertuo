<?php

namespace Ertuo\Lab;

use Ertuo\Route;
use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Ertuo;

class Benchmark_Bitbucket_Ertuo_Builder_Array extends Benchmark_Ertuo
{
	function loadRoutes() : Route
	{
		return include __DIR__
			. '/Benchmark_Bitbucket/routes/ertuo_array_builder.php';
	}
}
