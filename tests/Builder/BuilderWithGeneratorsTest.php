<?php

namespace Ertuo\Tests\Builder;

use Ertuo\Builder\BuilderInterface;
use Ertuo\Builder\BuilderWithGenerators;

class BuilderWithGeneratorsTest extends BuilderTestAbstract
{
	function getBuilder() : BuilderInterface
	{
		return new BuilderWithGenerators;
	}
}
