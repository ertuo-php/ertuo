<?php

namespace Ertuo\Builder;

use Ertuo\ExportInterface;
use Ertuo\Builder\BuilderAbstract;

class BuilderWithArrays extends BuilderAbstract
{
	/**
	* @var string tab offset as string; array declarations are deeper, so
	*	the code will be easier to read with narrower offsets, hence
	*	the 4 spaces instead of a full tab
	*/
	protected $tab = '    ';

	protected function buildGroup(array $routes, string $offset) : string
	{
		$php = "\n"
			. $offset . "->group(function()\n"
			. $offset . "{\n"
			. $offset . $this->tab . "return array(\n";

		$next = $offset . $this->tab . $this->tab;
		foreach ($routes as $name => $route)
		{
			$php .= "\n"
				. $next . "'{$name}' => "
				. $this->buildRoute($route, $next)
				. ",\n";
		}

		$php .= ''
			. "\n" . $offset . $this->tab . ");\n"
			. "\n" . $offset . "})";

		return $php;
	}
}
