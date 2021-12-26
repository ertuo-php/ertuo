<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute_Cached;
use FastRoute\DataGenerator;
use FastRoute\Dispatcher;

class Benchmark_Bitbucket_FastRoute_Cached_GroupPosBased extends Benchmark_FastRoute_Cached
{
	protected $dataGeneratorClass = DataGenerator\GroupPosBased::class;
	protected $dispatcherClass = Dispatcher\GroupPosBased::class;
}
