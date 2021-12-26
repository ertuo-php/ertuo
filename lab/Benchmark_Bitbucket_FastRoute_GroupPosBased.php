<?php

namespace Ertuo\Lab;

use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_FastRoute_Simple;
use FastRoute\DataGenerator;
use FastRoute\Dispatcher;

class Benchmark_Bitbucket_FastRoute_GroupPosBased extends Benchmark_FastRoute_Simple
{
	protected $dataGeneratorClass = DataGenerator\GroupPosBased::class;
	protected $dispatcherClass = Dispatcher\GroupPosBased::class;
}
