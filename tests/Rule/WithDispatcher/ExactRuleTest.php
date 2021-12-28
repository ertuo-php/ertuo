<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\RouteGroup as Route;
use Ertuo\Rule\ExactRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class ExactRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('exact', ['test'])->default('no-match'),
			(new RuleAggregate)->add('exact', new ExactRule)
		);
	}

	function testExactWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 'no-match']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testExactWithNoMatch()
	{
		$result = $this->dispatcher->dispatch(['proba']);

		$this->assertEquals($result->attributes, ['match' => 'no-match']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['proba']);
	}

	function testExact()
	{
		$result = $this->dispatcher->dispatch(['test']);

		$this->assertEquals($result->attributes, ['match' => 'test']);
		$this->assertEquals($result->path, ['test']);
		$this->assertEquals($result->junk, []);
	}

	function testAnyWithJunk()
	{
		$result = $this->dispatcher->dispatch(['test', '123', '45']);

		$this->assertEquals($result->attributes, ['match' => 'test']);
		$this->assertEquals($result->path, ['test']);
		$this->assertEquals($result->junk, ['123', '45']);
	}
}
