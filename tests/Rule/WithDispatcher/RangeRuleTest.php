<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\Route;
use Ertuo\Rule\RangeRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class RangeRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('range', [3, 5])->default(5),
			(new RuleAggregate)->add('range', new RangeRule)
		);
	}

	function testRangeWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 5]);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testRangeWithNoMatch()
	{
		$result = $this->dispatcher->dispatch(['7']);

		$this->assertEquals($result->attributes, ['match' => 5]);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['7']);
	}

	function testRange()
	{
		$result = $this->dispatcher->dispatch(['3']);

		$this->assertEquals($result->attributes, ['match' => '3']);
		$this->assertEquals($result->path, ['3']);
		$this->assertEquals($result->junk, []);

		$result = $this->dispatcher->dispatch(['4']);

		$this->assertEquals($result->attributes, ['match' => '4']);
		$this->assertEquals($result->path, ['4']);
		$this->assertEquals($result->junk, []);
	}

	function testAnyWithJunk()
	{
		$result = $this->dispatcher->dispatch(['4', 'more', 'years']);

		$this->assertEquals($result->attributes, ['match' => '4']);
		$this->assertEquals($result->path, ['4']);
		$this->assertEquals($result->junk, ['more', 'years']);
	}
}
