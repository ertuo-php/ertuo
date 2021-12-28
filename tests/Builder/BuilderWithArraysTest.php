<?php

namespace Ertuo\Tests\Builder;

use Ertuo\Builder\BuilderInterface;
use Ertuo\Builder\BuilderWithArrays;

class BuilderWithArraysTest extends BuilderTestAbstract
{
	function getBuilder() : BuilderInterface
	{
		return new BuilderWithArrays;
	}
}
