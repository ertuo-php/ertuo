<?php

namespace Ertuo\Lab;

use PHPUnit\Framework\Assert;

/**
* Benchmark validating positive integers:
*
*	a) only casting
* 	b) is_int()
* 	c) regular expression
*
* @see https://stackoverflow.com/a/26058216
* @see https://stackoverflow.com/questions/4844916/best-way-to-check-for-positive-integer-php
*
* @Revs(8000)
* @Iterations(5)
*/
class Benchmark_List_vs_Prop
{
	function benchCast()
	{
		$value = "3";
		Assert::assertTrue(((int) $value == $value && $value > 0));

		$value = -8;
		Assert::assertFalse(((int) $value == $value && $value > 0));
	}

	function benchIsInt()
	{
		$value = "3";
		Assert::assertTrue((is_int(1 * $value) && $value > 0));

		$value = -8;
		Assert::assertFalse((is_int(1 * $value) && $value > 0));
	}

	function benchCTypeDigit()
	{
		$value = "3";
		Assert::assertTrue( (bool) ctype_digit($value) );

		$value = -8;
		Assert::assertFalse( (bool) ctype_digit($value) );
	}

	function benchPreg()
	{
		$value = "3";
		Assert::assertTrue( (bool) preg_match('/^\d+$/', $value) );

		$value = -8;
		Assert::assertFalse( (bool) preg_match('/^\d+$/', $value) );
	}
}
