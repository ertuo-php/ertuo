<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\Route;
use Ertuo\Rule\AnyRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class AnyRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('any')->default('nomatch'),
			(new RuleAggregate)->add('any', new AnyRule)
		);
	}

	function testAnyWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 'nomatch']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testAny()
	{
		$result = $this->dispatcher->dispatch(['123']);

		$this->assertEquals($result->attributes, ['match' => '123']);
		$this->assertEquals($result->path, ['123']);
		$this->assertEquals($result->junk, []);
	}

	function testAnyWithJunk()
	{
		$result = $this->dispatcher->dispatch(['12', '34', '56']);

		$this->assertEquals($result->attributes, ['match' => '12']);
		$this->assertEquals($result->path, ['12']);
		$this->assertEquals($result->junk, ['34', '56']);
	}
}
