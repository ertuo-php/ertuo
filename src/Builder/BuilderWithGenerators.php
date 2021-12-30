<?php

namespace Ertuo\Builder;

use Ertuo\Builder\BuilderAbstract;
use Ertuo\ExportInterface;

class BuilderWithGenerators extends BuilderAbstract
{
	protected function buildGroup(array $routes, string $offset) : string
	{
		$php = "\n"
			. $offset . "->group(function()\n"
			. $offset . "{\n";

		$next = $offset . $this->tab;
		foreach ($routes as $key => $route)
		{
			$php .= "\n" . $next
				. "yield '{$key}' => "
				. $this->buildRoute($route, $next)
				. ";\n";
		}

		$php .= "\n" . $offset . "})";

		return $php;
	}
}
