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
		$this->assertFalse($enum->isValid('', ['en', 'bg'], new Result));
	}

	function testEnumWithOther()
	{
		$enum = new EnumRule;
		$this->assertFalse($enum->isValid('de', ['en', 'bg'], new Result));
	}

	function testEnum()
	{
		$enum = new EnumRule;
		$this->assertTrue($enum->isValid('en', ['en', 'bg'], $result = new Result));
		$this->assertTrue($enum->isValid('bg', ['en', 'bg'], $result));
	}
}
