<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\EnumRule;
use PHPUnit\Framework\TestCase;

class EnumRuleTest extends TestCase
{
	function testEnumWithEmpty()
	{
		$enum = new EnumRule;
		$this->assertFalse($enum->accept('', ['en', 'bg'], new Result));
	}

	function testEnumWithOther()
	{
		$enum = new EnumRule;
		$this->assertFalse($enum->accept('de', ['en', 'bg'], new Result));
	}

	function testEnum()
	{
		$enum = new EnumRule;
		$this->assertTrue($enum->accept('en', ['en', 'bg'], $result = new Result));
		$this->assertTrue($enum->accept('bg', ['en', 'bg'], $result));
	}
}
