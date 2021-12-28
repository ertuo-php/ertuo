<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\Route;
use Ertuo\Rule\EnumRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class EnumRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('enum', ['en', 'de'])->default('bg'),
			(new RuleAggregate)->add('enum', new EnumRule)
		);
	}

	function testEnumWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 'bg']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testEnumWithNoMatch()
	{
		$result = $this->dispatcher->dispatch(['nl']);

		$this->assertEquals($result->attributes, ['match' => 'bg']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['nl']);
	}

	function testEnum()
	{
		$result = $this->dispatcher->dispatch(['en']);

		$this->assertEquals($result->attributes, ['match' => 'en']);
		$this->assertEquals($result->path, ['en']);
		$this->assertEquals($result->junk, []);

		$result = $this->dispatcher->dispatch(['de']);

		$this->assertEquals($result->attributes, ['match' => 'de']);
		$this->assertEquals($result->path, ['de']);
		$this->assertEquals($result->junk, []);
	}

	function testAnyWithJunk()
	{
		$result = $this->dispatcher->dispatch(['en', 'about', 'us']);

		$this->assertEquals($result->attributes, ['match' => 'en']);
		$this->assertEquals($result->path, ['en']);
		$this->assertEquals($result->junk, ['about', 'us']);
	}
}
