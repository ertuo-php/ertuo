<?php

namespace Ertuo;

use function array_filter;
use function explode;

class Kit
{
	static function quickExplode(string $path) : array
	{
		return array_filter( explode('/', $path) );
	}
}
