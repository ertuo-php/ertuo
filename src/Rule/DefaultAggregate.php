<?php

namespace Ertuo\Rule;

use Ertuo\Rule\RuleInterface;
use Ertuo\Rule\Aggregate;
use Ertuo\Rule\AnyRule;
use Ertuo\Rule\EnumRule;
use Ertuo\Rule\ExactRule;
use Ertuo\Rule\FormatRule;
use Ertuo\Rule\IDRule;
use Ertuo\Rule\PathRule;

class DefaultAggregate extends Aggregate
{
	function fetchRule(string $type) : RuleInterface
	{
		if (empty($this->rules[ $type ]))
		{
			switch ($type)
			{
				case 'any':
					return $this->rules[ $type ] = new AnyRule;

				case 'enum':
					return $this->rules[ $type ] = new EnumRule;

				case 'exact':
					return $this->rules[ $type ] = new ExactRule;

				case 'format':
					return $this->rules[ $type ] = new FormatRule;

				case 'id':
					return $this->rules[ $type ] = new IDRule;

				case 'path':
					return $this->rules[ $type ] = new PathRule;
			}
		}

		return parent::fetchRule($type);
	}
}
