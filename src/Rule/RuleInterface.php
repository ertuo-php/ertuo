<?php

namespace Ertuo\Rule;

use Ertuo\Result;

interface RuleInterface
{
	function isValid(string $step, array $options, Result $result) : bool;
}
