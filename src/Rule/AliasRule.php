<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

class AliasRule implements RuleInterface
{
	protected $rule;
	protected $options;

	function __construct(RuleInterface $rule, array $options = [])
	{
		$this->rule = $rule;
		$this->options = $options;
	}

	function isValid(string $step, array $options, Result $result) : bool
	{
		return $this->rule->isValid(
			$step,
			$options ?: $this->options,
			$result
			);
	}
}
