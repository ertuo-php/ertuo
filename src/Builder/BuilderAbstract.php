<?php

namespace Ertuo\Builder;

use Ertuo\Builder\BuilderInterface;
use Ertuo\ExportInterface;

use function is_array;

abstract class BuilderAbstract implements BuilderInterface
{
	protected $tab = "\t";

	function __construct(string $tab = null)
	{
		$this->tab = $tab ?? $this->tab;
	}

	/**
	* @see Ertuo\Builder\BuilderInterface::buildTree()
	*/
	function buildTree(ExportInterface $route) : string
	{
		$php = "<?php\n"
			. "\n"
			. "use Ertuo\Route;\n"
			. "\n"
			. "return \$routes = "
				. $this->buildRoute($route->toArray(), '')
				. ";\n";

		return $php;
	}

	protected function buildRoute(array $tree, string $offset) : string
	{
		$name = $tree[ 'name' ] ?? '';

		$attributes = $tree[ 'attributes' ] ?? [];
		$php_attr = $this->buildArrayArgument( $attributes );

		$php = "Route::add('{$name}', {$php_attr})";

		$rule = false;
		if (!empty($tree[ 'rule' ]))
		{
			if ($rule = $this->buildRule( (array) $tree[ 'rule' ] ))
			{
				$php .= "\n" . $offset . $rule;
			}
		}

		if (!empty($tree[ 'default' ]))
		{
			if ($default = $this->buildDefault( (array) $tree[ 'default' ] ))
			{
				$php .= ($rule ? '' : $offset) . $default;
			}
		}

		if (!empty($tree[ 'routes' ]))
		{
			$php .= $this->buildGroup( (array) $tree[ 'routes' ], $offset);
		}

		return $php ;
	}

	protected function buildArrayArgument(array $args) : string
	{
		if (empty($args))
		{
			return '[]';
		}

		$elements = '[';
		foreach ($args as $key => $value)
		{
			if (is_array($value))
			{
				$elements .= "'{$key}' => "
					. $this->buildArrayArgument((array) $value)
					. ", ";
			} else
			{
				$elements .= "'{$key}' => '{$value}', ";
			}
		}
		$elements .= ']';

		return $elements;
	}

	protected function buildArrayOptions(array $args) : string
	{
		if (empty($args))
		{
			return '[]';
		}

		$elements = '[';
		foreach ($args as $value)
		{
			$elements .= "'{$value}', ";
		}
		$elements .= ']';

		return $elements;
	}

	protected function buildRule(array $rule) : string
	{
		$type = $rule[0] ?? '';
		$options = $rule[1] ?? [];
		$extra = $rule[2] ?? [];

		if (!$type && !$extra)
		{
			return '';
		}

		$php_type = (string) $type;
		$php_options = $this->buildArrayOptions( (array) $options );
		$php_extra = $this->buildArrayArgument( (array) $extra );

		return "->rule('{$php_type}', {$php_options}, {$php_extra})";
	}

	protected function buildDefault(array $default) : string
	{
		$fallback = $default[0] ?? '';
		$failsafe = $default[1] ?? [];

		if (!$fallback && !$failsafe)
		{
			return '';
		}

		$php_fallback = (string) $fallback;
		$php_failsafe = $this->buildArrayArgument( $failsafe );

		return "->default('{$php_fallback}', {$php_failsafe})";
	}

	abstract protected function buildGroup(array $routes, string $offset) : string;
}
