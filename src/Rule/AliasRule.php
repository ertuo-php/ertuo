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

	function accept(string $step, array $options, Result $result) : bool
	{
		return $this->rule->accept(
			$step,
			$options ?: $this->options,
			$result
			);
	}
}
