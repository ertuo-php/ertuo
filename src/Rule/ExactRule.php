<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

use function current;

class ExactRule implements RuleInterface
{
	function accept(string $step, array $options, Result $result) : bool
	{
		return !empty($step) && ($step == current($options));
	}
}
