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
		$this->assertFalse($int->accept('', ['int'], $result = new Result ));

		$this->assertTrue($int->accept('123', ['int'], $result));
		$this->assertTrue($int->accept('00456', ['int'], $result));

		$this->assertFalse($int->accept('78x', ['int'], $result));
	}

	function _testFormatAlpha()
	{
		$alpha = new FormatRule;
		$this->assertFalse($alpha->accept('', ['alpha'], $result = new Result ));

		$this->assertTrue($alpha->accept('aBcD', ['alpha'], $result));

		$this->assertFalse($alpha->accept('aB_cD', ['alpha'], $result));
		$this->assertFalse($alpha->accept('aBc-D', ['alpha'], $result));
		$this->assertFalse($alpha->accept('k9', ['alpha'], $result));
	}

	function testFormatAlphaNum()
	{
		$alphanum = new FormatRule;
		$this->assertFalse($alphanum->accept('', ['alphanum'], $result = new Result ));

		$this->assertTrue($alphanum->accept('aBcD123', ['alphanum'], $result));
		$this->assertTrue($alphanum->accept('4ever', ['alphanum'], $result));

		$this->assertFalse($alphanum->accept('aB12_cD34', ['alphanum'], $result));
		$this->assertFalse($alphanum->accept('aBc56-D78', ['alphanum'], $result));
	}

	function testFormatVar()
	{
		$var = new FormatRule;
		$this->assertFalse($var->accept('', ['var'], $result = new Result ));

		$this->assertTrue($var->accept('aBcD123', ['var'], $result));
		$this->assertTrue($var->accept('aB12_cD34', ['var'], $result));

		$this->assertFalse($var->accept('aBc56-D78', ['var'], $result));
		$this->assertFalse($var->accept('4ever', ['var'], $result));
	}

	function testFormatYear()
	{
		$year = new FormatRule;
		$this->assertFalse($year->accept('', ['year'], $result = new Result ));

		$this->assertTrue($year->accept('2021', ['year'], $result ));
		$this->assertFalse($year->accept('21', ['year'], $result));
	}

	function testFormatMonth()
	{
		$month = new FormatRule;
		$this->assertFalse($month->accept('', ['month'], $result = new Result ));

		$this->assertTrue($month->accept('01', ['month'], $result));
		$this->assertTrue($month->accept('7', ['month'], $result));

		$this->assertFalse($month->accept('13', ['month'], $result));
	}

	function testFormatSlug()
	{
		$slug = new FormatRule;
		$this->assertFalse($slug->accept('', ['slug'], $result = new Result ));

		$this->assertTrue($slug->accept('01', ['slug'], $result ));
		$this->assertTrue($slug->accept('sam-i-am', ['slug'], $result ));

		$this->assertFalse($slug->accept('cat_with_a_hat', ['slug'], $result ));
		$this->assertFalse($slug->accept('@t-the-sky', ['slug'], $result ));
		$this->assertFalse($slug->accept('at-the--sky', ['slug'], $result ));
		$this->assertFalse($slug->accept('proba-', ['slug'], $result ));
	}
}
