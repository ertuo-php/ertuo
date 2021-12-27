<?php

namespace Ertuo\Rule;

use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

use function array_filter;

class CompositeRule implements RuleInterface
{
	protected $rules = array();

	function __construct(...$rules)
	{
		$this->rules = array_filter(
			$rules,
			fn($rule) => $rule instanceOf RuleInterface
		);
	}

	function accept(string $step, array $options, Result $result) : bool
	{
		foreach ($this->rules as $rule)
		{
			if ($rule->accept($step, $options, $result))
			{
				return true;
			}
		}

		return false;
	}
}
