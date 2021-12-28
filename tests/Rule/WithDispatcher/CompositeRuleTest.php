<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\RouteGroup as Route;
use Ertuo\Rule\CompositeRule;
use Ertuo\Rule\AliasRule;
use Ertuo\Rule\FormatRule;
use Ertuo\Rule\IDRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class CompositeRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$aggregate = new RuleAggregate;
		$slug = new CompositeRule(
			new IDRule,
			new AliasRule( new FormatRule, ['slug'])
		);

		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('slug')->default('nomatch'),
			$aggregate->add('slug', $slug)
		);
	}

	function testCompositeWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 'nomatch']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testCompositeWithNoMatch()
	{
		$result = $this->dispatcher->dispatch(['_test_']);

		$this->assertEquals($result->attributes, ['match' => 'nomatch']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['_test_']);
	}

	function testComposite()
	{
		$result = $this->dispatcher->dispatch(['123']);

		$this->assertEquals($result->attributes, ['match' => '123']);
		$this->assertEquals($result->path, ['123']);
		$this->assertEquals($result->junk, []);

		$result = $this->dispatcher->dispatch(['proba-na-probata']);

		$this->assertEquals($result->attributes, ['match' => 'proba-na-probata']);
		$this->assertEquals($result->path, ['proba-na-probata']);
		$this->assertEquals($result->junk, []);
	}

	function testCompositeWithJunk()
	{
		$result = $this->dispatcher->dispatch(['123', 'page', '2']);

		$this->assertEquals($result->attributes, ['match' => '123']);
		$this->assertEquals($result->path, ['123']);
		$this->assertEquals($result->junk, ['page', '2']);
	}
}
