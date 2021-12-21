<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Symfony;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

class Benchmark_Bitbucket_Symfony extends Benchmark_Symfony
{
	function setupRouting()
	{
		return new UrlMatcher(
			$this->loadedRoutes(),
			new RequestContext()
			);
	}

	function runRouting($route) : array
	{
		$matcher = $this->setupRouting();

		return $matcher->match($route);
	}
}
