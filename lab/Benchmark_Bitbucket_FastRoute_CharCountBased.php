<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute_Simple;
use FastRoute\DataGenerator;
use FastRoute\Dispatcher;

class Benchmark_Bitbucket_FastRoute_CharCountBased extends Benchmark_FastRoute_Simple
{
	protected $dataGeneratorClass = DataGenerator\CharCountBased::class;
	protected $dispatcherClass = Dispatcher\CharCountBased::class;
}
