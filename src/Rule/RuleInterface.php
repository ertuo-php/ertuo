<?php

namespace Ertuo\Rule;

use Ertuo\Result;

interface RuleInterface
{
	function accept(string $step, array $options, Result $result) : bool;
}
