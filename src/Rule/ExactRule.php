<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

use function current;

class ExactRule implements RuleInterface
{
	function isValid(string $step, array $options, Result $result) : bool
	{
		return !empty($step) && ($step == current($options));
	}
}
