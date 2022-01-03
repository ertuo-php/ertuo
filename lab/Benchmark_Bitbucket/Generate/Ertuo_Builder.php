<?php

namespace Ertuo\Lab\Benchmark_Bitbucket\Generate;

use Ertuo\Builder\BuilderWithArrays;
use Ertuo\Builder\BuilderWithGenerators;
use Ertuo\Builder\Rig;

class Ertuo_Builder
{
	function __construct(array $lines)
	{
		$tree = $this->readTree( $lines );
		$rig = (new Rig)->setTree($tree);

		$builder = new BuilderWithArrays;
		file_put_contents(
			$file = dirname(__DIR__) . '/routes/ertuo_array_builder.php',
			$builder->buildTree($rig)
			);
		echo "> {$file}\n";

		$builder = new BuilderWithGenerators;
		file_put_contents(
			$file = dirname(__DIR__) . '/routes/ertuo_generator_builder.php',
			$builder->buildTree($rig)
			);
		echo "> {$file}\n";
	}

	function readTree(array $lines)
	{
		$route = array(
			'key' => '',
			'attributes' => [],
			'rule' => array('', [], []),
			'default' => array('', []),
			'routes' => array(),
		);

		$tree = $route;

		foreach ($lines as $uri)
		{
			$steps = explode('/', $uri = trim(rtrim($uri), '/'));
			$routeID = $this->routeID($uri);

			$path = array();
			$current =& $tree;
			foreach($steps as $step)
			{
				$path[] = $step;
				$key = $this->keyID($step);

				// "direct" (empty) rule
				//
				if ($key == $step)
				{
					if (!isset($current['routes'][ $key ]))
					{
						$current['routes'][ $key ] = $route;
					}

					$current =& $current['routes'][ $key ];

					if ($path == $steps)
					{
						$current['attributes'] = ['_route' => $routeID];
					}

					continue;
				}

				// "any" rule
				//
				$current['key'] = $key;

				if (empty($current['rule'][0]))
				{
					$current['rule'] = array('any', []);
				}

				if ($path == $steps)
				{
					$current['rule'][2] = ['_route' => $routeID];
				} else
				{
					if (!isset($current['routes'][ '' ]))
					{
						$current['routes'][ '' ] = $route;
					}

					$current =& $current['routes'][ '' ];
				}
			}
		}

		return $tree;
	}

	function keyID($key)
	{
		return trim($key, '{}.');
	}

	function routeID($route)
	{
		return preg_replace('#\W+#', '_', $this->keyID($route));
	}
}
