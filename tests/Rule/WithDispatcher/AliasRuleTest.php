<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\Route;
use Ertuo\Rule\AliasRule;
use Ertuo\Rule\EnumRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class AliasRuleTest extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$aggregate = new RuleAggregate;
		$locale = new AliasRule(
			new EnumRule,
			['en', 'de']
		);

		$this->dispatcher = new Dispatcher(
			Route::add('match')->rule('locale')->default('nomatch'),
			$aggregate->add('locale', $locale)
		);
	}

	function testAliasWithEmpty()
	{
		$result = $this->dispatcher->dispatch([]);

		$this->assertEquals($result->attributes, ['match' => 'nomatch']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);
	}

	function testAlias()
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

	function testAliasWithJunk()
	{
		$result = $this->dispatcher->dispatch(['en', 'about', 'us']);

		$this->assertEquals($result->attributes, ['match' => 'en']);
		$this->assertEquals($result->path, ['en']);
		$this->assertEquals($result->junk, ['about', 'us']);
	}
}
