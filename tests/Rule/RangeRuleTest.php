<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\RangeRule;
use PHPUnit\Framework\TestCase;

class RangeRuleTest extends TestCase
{
	function testRangeWithEmpty()
	{
		$enum = new RangeRule;
		$this->assertFalse($enum->accept('', [3, 5], new Result));
	}

	function testRangeWithOutsideValues()
	{
		$enum = new RangeRule;
		$this->assertFalse($enum->accept('1', [3, 5], $result = new Result));
		$this->assertFalse($enum->accept('7', [3, 5], $result));
		$this->assertFalse($enum->accept('a', [3, 5], $result));
		$this->assertFalse($enum->accept('4', ['a', 'z'], $result));
	}

	function testRange()
	{
		$enum = new RangeRule;
		$this->assertTrue($enum->accept('3', [3, 5], $result = new Result));
		$this->assertTrue($enum->accept('4', [5, 3], $result));

		$this->assertTrue($enum->accept('m', ['a', 'z'], $result));
	}
}
