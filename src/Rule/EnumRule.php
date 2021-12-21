<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

class EnumRule implements RuleInterface
{
	function isValid(string $step, array $options, Result $result) : bool
	{
		return !empty($step) && in_array($step, $options);
	}
}
