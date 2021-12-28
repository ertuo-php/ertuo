<?php

namespace Ertuo\Tests\Rule\WithDispatcher;

use Ertuo\Dispatcher;
use Ertuo\Route;
use Ertuo\Rule\FormatRule;
use Ertuo\Rule\Aggregate as RuleAggregate;
use PHPUnit\Framework\TestCase;

class FormatRuleTest extends TestCase
{
	function testFormatInt()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['int'])->default('00000'),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch([]);
		$this->assertEquals($result->attributes, ['match' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['123']);
		$this->assertEquals($result->attributes, ['match' => '123']);
		$this->assertEquals($result->path, ['123']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['00456']);
		$this->assertEquals($result->attributes, ['match' => '00456']);
		$this->assertEquals($result->path, ['00456']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['78x']);
		$this->assertEquals($result->attributes, ['match' => '00000']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['78x']);

	}

	function testFormatAlpha()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['alpha']),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch([]);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aBcD']);
		$this->assertEquals($result->attributes, ['match' => 'aBcD']);
		$this->assertEquals($result->path, ['aBcD']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aB_cD']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['aB_cD']);

		$result = $dispatcher->dispatch(['aBc-D']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['aBc-D']);

		$result = $dispatcher->dispatch(['k9']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['k9']);
	}

	function testFormatAlphaNum()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['alphanum'])->default('X-000-1'),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch([]);
		$this->assertEquals($result->attributes, ['match' => 'X-000-1']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aBcD123']);
		$this->assertEquals($result->attributes, ['match' => 'aBcD123']);
		$this->assertEquals($result->path, ['aBcD123']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aB12_cD34']);
		$this->assertEquals($result->attributes, ['match' => 'X-000-1']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['aB12_cD34']);

		$result = $dispatcher->dispatch(['aBc56-D78']);
		$this->assertEquals($result->attributes, ['match' => 'X-000-1']);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['aBc56-D78']);

		$result = $dispatcher->dispatch(['4ever', 'and', 'ever']);
		$this->assertEquals($result->attributes, ['match' => '4ever']);
		$this->assertEquals($result->path, ['4ever']);
		$this->assertEquals($result->junk, ['and', 'ever']);
	}

	function testFormatVar()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['var']),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch(['aBcD123']);
		$this->assertEquals($result->attributes, ['match' => 'aBcD123']);
		$this->assertEquals($result->path, ['aBcD123']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aB12_cD34']);
		$this->assertEquals($result->attributes, ['match' => 'aB12_cD34']);
		$this->assertEquals($result->path, ['aB12_cD34']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['aBc56-D78']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['aBc56-D78']);

		$result = $dispatcher->dispatch(['4ever']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['4ever']);
	}

	function testFormatYear()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['year']),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch(['2021']);
		$this->assertEquals($result->attributes, ['match' => '2021']);
		$this->assertEquals($result->path, ['2021']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['21']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['21']);
	}

	function testFormatMonth()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['month']),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch(['01']);
		$this->assertEquals($result->attributes, ['match' => '01']);
		$this->assertEquals($result->path, ['01']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['7']);
		$this->assertEquals($result->attributes, ['match' => '7']);
		$this->assertEquals($result->path, ['7']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['13']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['13']);
	}

	function testFormatSlug()
	{
		$dispatcher = new Dispatcher(
			Route::add('match')->rule('format', ['slug']),
			(new RuleAggregate)->add('format', new FormatRule)
		);

		$result = $dispatcher->dispatch(['01']);
		$this->assertEquals($result->attributes, ['match' => '01']);
		$this->assertEquals($result->path, ['01']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['sam-i-am']);
		$this->assertEquals($result->attributes, ['match' => 'sam-i-am']);
		$this->assertEquals($result->path, ['sam-i-am']);
		$this->assertEquals($result->junk, []);

		$result = $dispatcher->dispatch(['cat_with_a_hat']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['cat_with_a_hat']);

		$result = $dispatcher->dispatch(['@t-the-sky']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['@t-the-sky']);

		$result = $dispatcher->dispatch(['at-the--sky']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['at-the--sky']);

		$result = $dispatcher->dispatch(['proba-']);
		$this->assertEquals($result->attributes, []);
		$this->assertEquals($result->path, []);
		$this->assertEquals($result->junk, ['proba-']);
	}
}
