<?php

namespace Ertuo\Tests\Rule;

use Ertuo\Result;
use Ertuo\Rule\FormatRule;
use PHPUnit\Framework\TestCase;

class FormatRuleTest extends TestCase
{
	function testFormatInt()
	{
		$int = new FormatRule;
		$this->assertFalse($int->isValid('', ['int'], $result = new Result ));

		$this->assertTrue($int->isValid('123', ['int'], $result));
		$this->assertTrue($int->isValid('00456', ['int'], $result));

		$this->assertFalse($int->isValid('78x', ['int'], $result));
	}

	function _testFormatAlpha()
	{
		$alpha = new FormatRule;
		$this->assertFalse($alpha->isValid('', ['alpha'], $result = new Result ));

		$this->assertTrue($alpha->isValid('aBcD', ['alpha'], $result));

		$this->assertFalse($alpha->isValid('aB_cD', ['alpha'], $result));
		$this->assertFalse($alpha->isValid('aBc-D', ['alpha'], $result));
		$this->assertFalse($alpha->isValid('k9', ['alpha'], $result));
	}

	function testFormatAlphaNum()
	{
		$alphanum = new FormatRule;
		$this->assertFalse($alphanum->isValid('', ['alphanum'], $result = new Result ));

		$this->assertTrue($alphanum->isValid('aBcD123', ['alphanum'], $result));
		$this->assertTrue($alphanum->isValid('4ever', ['alphanum'], $result));

		$this->assertFalse($alphanum->isValid('aB12_cD34', ['alphanum'], $result));
		$this->assertFalse($alphanum->isValid('aBc56-D78', ['alphanum'], $result));
	}

	function testFormatVar()
	{
		$var = new FormatRule;
		$this->assertFalse($var->isValid('', ['var'], $result = new Result ));

		$this->assertTrue($var->isValid('aBcD123', ['var'], $result));
		$this->assertTrue($var->isValid('aB12_cD34', ['var'], $result));

		$this->assertFalse($var->isValid('aBc56-D78', ['var'], $result));
		$this->assertFalse($var->isValid('4ever', ['var'], $result));
	}

	function testFormatYear()
	{
		$year = new FormatRule;
		$this->assertFalse($year->isValid('', ['year'], $result = new Result ));

		$this->assertTrue($year->isValid('2021', ['year'], $result ));
		$this->assertFalse($year->isValid('21', ['year'], $result));
	}

	function testFormatMonth()
	{
		$month = new FormatRule;
		$this->assertFalse($month->isValid('', ['month'], $result = new Result ));

		$this->assertTrue($month->isValid('01', ['month'], $result));
		$this->assertTrue($month->isValid('7', ['month'], $result));

		$this->assertFalse($month->isValid('13', ['month'], $result));
	}

	function testFormatSlug()
	{
		$slug = new FormatRule;
		$this->assertFalse($slug->isValid('', ['slug'], $result = new Result ));

		$this->assertTrue($slug->isValid('01', ['slug'], $result ));
		$this->assertTrue($slug->isValid('sam-i-am', ['slug'], $result ));

		$this->assertFalse($slug->isValid('cat_with_a_hat', ['slug'], $result ));
		$this->assertFalse($slug->isValid('@t-the-sky', ['slug'], $result ));
		$this->assertFalse($slug->isValid('at-the--sky', ['slug'], $result ));
		$this->assertFalse($slug->isValid('proba-', ['slug'], $result ));
	}
}
