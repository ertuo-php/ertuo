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
		$this->assertFalse($any->accept('', [], new Result));
	}

	function testAny()
	{
		$any = new AnyRule;

		$this->assertTrue($any->accept('.', [], $result = new Result));
		$this->assertTrue($any->accept(' ', [], $result));
		$this->assertTrue($any->accept('123', [], $result));
		$this->assertTrue($any->accept('abc', [], $result));
		$this->assertTrue($any->accept('-', [], $result));
	}
}
