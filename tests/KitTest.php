<?php

namespace Ertuo\Tests;

use Ertuo\Kit;
use PHPUnit\Framework\TestCase;

class KitTest extends TestCase
{
	/**
	* @dataProvider provider_explode_path
	* @covers Ertuo\Kit::quickExplode()
	*/
	function test_quickExplode($path, $result)
	{
		$source = Kit::quickExplode($path);
		$this->assertEquals(array_values($source), $result );
	}

	function provider_explode_path()
	{
		return array(
			array('a/b/c', ['a','b','c']),
			array('a//b/c', ['a','b','c']),
			array('//a/b/c', ['a','b','c']),
			array('a/b/c/', ['a','b','c']),
			array('a/b/c/', ['a','b','c']),
			array('/a/b/c', ['a','b','c']),
		);
	}
}
