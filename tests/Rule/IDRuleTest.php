<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\IDRule;
use PHPUnit\Framework\TestCase;

class IDRuleTest extends TestCase
{
	function testIDWithEmpty()
	{
		$id = new IDRule;
		$this->assertFalse($id->isValid('', [], new Result));
	}

	function testIDWithOther()
	{
		$id = new IDRule;
		$this->assertFalse($id->isValid('0', [], $result = new Result));
		$this->assertFalse($id->isValid(' 1', [], $result));
		$this->assertFalse($id->isValid('-2', [], $result));
		$this->assertFalse($id->isValid('.3', [], $result));
		$this->assertFalse($id->isValid('04', [], $result));
		$this->assertFalse($id->isValid('5.00', [], $result));
		$this->assertFalse($id->isValid('6.', [], $result));
		$this->assertFalse($id->isValid('7x', [], $result));
		$this->assertFalse($id->isValid('x8', [], $result));
	}

	function testID()
	{
		$id = new IDRule;
		$this->assertTrue($id->isValid('123', [], $result = new Result));
	}
}
