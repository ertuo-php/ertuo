<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Symfony;
use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;
use Symfony\Component\Routing\RequestContext;

use function file_put_contents;

class Benchmark_Bitbucket_Symfony_Compiled extends Benchmark_Symfony
{
	protected $cached_routes;

	function __construct()
	{
		$this->cached_routes = __DIR__
			. '/Benchmark_Bitbucket/routes/symfony_cached_routes.php';
		if (!is_file($this->cached_routes))
		{
			$dumper = new CompiledUrlMatcherDumper( $this->loadedRoutes() );
			file_put_contents(
				$this->cached_routes,
				$dumper->dump()
				);
		}
	}

	function setupRouting()
	{
		return new CompiledUrlMatcher(
			include $this->cached_routes,
			new RequestContext()
			);
	}

	function runRouting($route) : array
	{
		$matcher = $this->setupRouting();

		return $matcher->match($route);
	}
}
