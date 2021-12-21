<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\AnyRule;
use PHPUnit\Framework\TestCase;

class AnyRule_Test extends TestCase
{
	function testAnyWithEmpty()
	{
		$any = new AnyRule;
		$this->assertFalse($any->isValid('', [], new Result));
	}

	function testAny()
	{
		$any = new AnyRule;

		$this->assertTrue($any->isValid('.', [], $result = new Result));
		$this->assertTrue($any->isValid(' ', [], $result));
		$this->assertTrue($any->isValid('123', [], $result));
		$this->assertTrue($any->isValid('abc', [], $result));
		$this->assertTrue($any->isValid('-', [], $result));
	}
}
