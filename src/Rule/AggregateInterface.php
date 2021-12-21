<?php

namespace Ertuo\Rule;

use Ertuo\Rule\RuleInterface;

interface AggregateInterface
{
	function fetchRule(string $type) : RuleInterface;
}
