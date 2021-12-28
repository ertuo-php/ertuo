<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

use function array_shift;

class RangeRule implements RuleInterface
{
	function accept(string $step, array $options, Result $result) : bool
	{
		if (empty($step))
		{
			return false;
		}

		$from = array_shift($options) ?? 0;
		$to = array_shift($options) ?? 0;

		// make it work both ways, e.g. low-to-high and high-to-low
		//
		return ($from < $to)
			? ($from <= $step && $step <= $to)
			: ($to <= $step && $step <= $from);
	}
}
