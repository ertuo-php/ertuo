<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\RouteGroup as Route;
use Ertuo\Rule\PathRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class PathRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('path', ['page'])->default('00000'),
			(new RuleAggregate)->add('path', new PathRule)
		);
	}

	function testPathEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testPath()
	{
		$result = $this->dispatcher->dispatch(['12', '34', '56']);

		$this->assertEquals($result->attributes, ['match' => ['12', '34', '56']]);
		$this->assertEquals($result->path, ['12', '34', '56']);
		$this->assertEquals($result->junk, []);
	}

	function testpathWithUntil()
	{
		$result = $this->dispatcher->dispatch(['12', '34', 'page','56']);

		$this->assertEquals($result->attributes, ['match' => ['12', '34']]);
		$this->assertEquals($result->path, ['12', '34']);
		$this->assertEquals($result->junk, ['page', '56']);
	}
}
