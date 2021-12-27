<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\ExactRule;
use PHPUnit\Framework\TestCase;

class ExactRuleTest extends TestCase
{
	function testExactWithEmpty()
	{
		$exact = new ExactRule;
		$this->assertFalse($exact->accept('', [], new Result));
	}

	function testExactWithOther()
	{
		$exact = new ExactRule;
		$this->assertFalse($exact->accept('en', ['bg'], $result = new Result));
	}

	function testExact()
	{
		$exact = new ExactRule;
		$this->assertTrue($exact->accept('bg', ['bg'], $result = new Result));
	}
}
