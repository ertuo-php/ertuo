<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

class IDRule implements RuleInterface
{
	function isValid(string $step, array $options, Result $result) : bool
	{
		// quicker than "\d+" - no function calls, just (re)casting,
		// check Ertuo\Lab\Benchmark_ID for comparing results
		//
		$value = (int) $step;

		return ($value == $step)
			&& ($step === (string) $value)
			&& ($value > 0);
	}
}
