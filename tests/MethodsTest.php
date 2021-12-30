<?php

namespace Ertuo\Tests;

use Ertuo\Result;
use PHPUnit\Framework\TestCase;

class MethodsTest extends TestCase
{
	protected $result;

	function setUp() : void
	{
		$this->result = new Result;

		$this->result->attributes = array(
			'_route_method_get' => 'Something::show',
			'_route_method_post' => array('SomethingElse', 'update'),
			'_route_method_delete' => static function() {},
		);
	}

	function testAllowedMethods()
	{
		$this->assertEquals(
			$this->result->allowedMethods(),
			array('GET', 'POST', 'DELETE')
		);
	}

	function testMethodFound()
	{
		$this->assertEquals(
			$this->result->handler('GET'),
			'Something::show'
			);

		$this->assertEquals(
			$this->result->handler('POST'),
			array('SomethingElse', 'update')
			);

		$this->assertInstanceOf(
			\Closure::class,
			$this->result->handler('DELETE')
			);
	}

	function testHeadMethod()
	{
		$this->assertEquals(
			$this->result->handler('HEAD'),
			'Something::show'
			);
	}

	function testMethodNotFound()
	{
		$this->assertNull( $this->result->handler('PUT') );
	}
}
