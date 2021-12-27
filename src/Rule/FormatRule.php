<?php

namespace Ertuo\Rule;

use Ertuo\Rule\RuleInterface;
use Ertuo\Result;

use function preg_match;

class FormatRule implements RuleInterface
{
	const FORMAT_INT = '[0-9]+';

	const FORMAT_ALPHA = '[a-zA-Z]+';

	const FORMAT_ALPHANUM = '[a-zA-Z0-9]+';

	const FORMAT_VAR = '[a-zA-Z][a-zA-Z0-9_]*';

	const FORMAT_YEAR = '20[0-9]{2}'; /* 2000 to 2099 */

	const FORMAT_MONTH = '(?:0?[1-9]|1[0-2])';

	const FORMAT_SLUG = '[a-z0-9]+(?:-[a-z0-9]+)*';

	protected $formats = array(
		'int' => self::FORMAT_INT,
		'alpha' => self::FORMAT_ALPHA,
		'alphanum' => self::FORMAT_ALPHANUM,
		'var' => self::FORMAT_VAR,
		'year' => self::FORMAT_YEAR,
		'month' => self::FORMAT_MONTH,
		'slug' => self::FORMAT_SLUG,
		);

	function addFormat(string $name, string $format) : self
	{
		$this->formats[ $name ] = $format;
		return $this;
	}

	function accept(string $key, array $formats, Result $result) : bool
	{
		if (empty($key))
		{
			return false;
		}

		foreach($formats as $format)
		{
			$pattern = $this->formats[ $format ] ?? null;
			if (!$pattern)
			{
				continue;
			}

			$match = preg_match("~^{$pattern}\$~", $key);
			if ($match)
			{
				return true;
			}
		}

		return false;
	}

}
