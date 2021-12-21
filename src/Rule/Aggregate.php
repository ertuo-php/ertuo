<?php

namespace Ertuo\Rule;

use Ertuo\Rule\AggregateInterface;
use Ertuo\Rule\RuleInterface;
use InvalidArgumentException;
use UnexpectedValueException;

class Aggregate implements AggregateInterface
{
	protected $rules = array();

	function add(string $type, RuleInterface $rule) : self
	{
		$this->rules[ $type ] = $rule;
		return $this;
	}

	protected $lazy = array();

	function lazy(string $type, callable $lazy) : self
	{
		$this->lazy[ $type ] = $lazy;
		return $this;
	}

	function fetchRule(string $type) : RuleInterface
	{
		$rule = $this->rules[ $type ] ?? null;
		if ($rule)
		{
			return $rule;
		}

		$lazy = $this->lazy[ $type ] ?? null;
		if ($lazy)
		{
			$rule = $lazy($this);

			if ($rule instanceOf RuleInterface)
			{
				return $this->rules[ $type ] = $rule;
			}
		}

		throw new InvalidArgumentException(
			"Unknown rule '{$type}'"
		);
	}

	function alias(string $type, RuleInterface $rule, array $options = []) : self
	{
		return $this->lazy($type, fn() => new AliasRule($rule, $options));
	}
}
