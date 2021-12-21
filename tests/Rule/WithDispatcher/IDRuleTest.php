<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\RouteGroup as Route;
use Ertuo\Rule\IDRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class IDRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp()
	{
		$this->dispatcher = new Dispatcher(
			Route::add('id')->rule('id')->default('00000'),
			(new RuleAggregate)->add('id', new IDRule)
		);
	}

	function testIDWithDefault()
	{
		$result = $this->dispatcher->dispatch([]);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testID()
	{
		$result = $this->dispatcher->dispatch(['123']);
		$this->assertEquals($result->attributes, ['id' => '123']);
		$this->assertEquals($result->path, ['123']);
		$this->assertEquals($result->junk, []);
	}

	function testIDWithBadInput()
	{
		$result = $this->dispatcher->dispatch([' 1']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, [' 1']);

		$result = $this->dispatcher->dispatch(['-2']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['-2']);

		$result = $this->dispatcher->dispatch(['04']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['04']);

		$result = $this->dispatcher->dispatch(['5.00']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['5.00']);

		$result = $this->dispatcher->dispatch(['6.']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['6.']);

		$result = $this->dispatcher->dispatch(['.7']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['.7']);

		$result = $this->dispatcher->dispatch(['8x']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['8x']);

		$result = $this->dispatcher->dispatch(['x9']);
		$this->assertEquals($result->attributes, ['id' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['x9']);
	}
}
