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
		$this->assertFalse($exact->isValid('', [], new Result));
	}

	function testExactWithOther()
	{
		$exact = new ExactRule;
		$this->assertFalse($exact->isValid('en', ['bg'], $result = new Result));
	}

	function testExact()
	{
		$exact = new ExactRule;
		$this->assertTrue($exact->isValid('bg', ['bg'], $result = new Result));
	}
}
