<?php

namespace Ertuo;

use Ertuo\Result;

interface DispatcherInterface
{
	function dispatch(array $source, Result $result = null) : Result;
}
