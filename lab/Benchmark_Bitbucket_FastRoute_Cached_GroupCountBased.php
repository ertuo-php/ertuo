<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute_Cached;
use FastRoute\DataGenerator;
use FastRoute\Dispatcher;

class Benchmark_Bitbucket_FastRoute_Cached_GroupCountBased extends Benchmark_FastRoute_Cached
{
	protected $dataGeneratorClass = DataGenerator\GroupCountBased::class;
	protected $dispatcherClass = Dispatcher\GroupCountBased::class;
}
