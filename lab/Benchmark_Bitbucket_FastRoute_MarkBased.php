<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute_Simple;
use FastRoute\DataGenerator;
use FastRoute\Dispatcher;

class Benchmark_Bitbucket_FastRoute_MarkBased extends Benchmark_FastRoute_Simple
{
	protected $dataGeneratorClass = DataGenerator\MarkBased::class;
	protected $dispatcherClass = Dispatcher\MarkBased::class;
}
