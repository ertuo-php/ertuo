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
		$this->assertFalse($id->accept('', [], new Result));
	}

	function testIDWithOther()
	{
		$id = new IDRule;
		$this->assertFalse($id->accept('0', [], $result = new Result));
		$this->assertFalse($id->accept(' 1', [], $result));
		$this->assertFalse($id->accept('-2', [], $result));
		$this->assertFalse($id->accept('.3', [], $result));
		$this->assertFalse($id->accept('04', [], $result));
		$this->assertFalse($id->accept('5.00', [], $result));
		$this->assertFalse($id->accept('6.', [], $result));
		$this->assertFalse($id->accept('7x', [], $result));
		$this->assertFalse($id->accept('x8', [], $result));
	}

	function testID()
	{
		$id = new IDRule;
		$this->assertTrue($id->accept('123', [], $result = new Result));
	}
}
