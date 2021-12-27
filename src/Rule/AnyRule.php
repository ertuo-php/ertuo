<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

class AnyRule implements RuleInterface
{
	function accept(string $step, array $options, Result $result) : bool
	{
		return !empty($step);
	}
}
