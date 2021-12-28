<?php

namespace Ertuo;

use Ertuo\GroupInterface;

use function get_called_class;

abstract class RouteAbstract implements GroupInterface
{
	public string $name = '';

	public array $attributes = array();

	public array $rule = array('', [], []);

	public array $default = array('', []);

	function __construct(string $name = '', array $attributes = [])
	{
		$this->name = $name;
		$this->attributes = $attributes;
	}

	function carry(array $attributes) : self
	{
		$this->attributes = $attributes;
		return $this;
	}

	function rule(string $type, array $options = [], array $attributes = []) : self
	{
		$this->rule = array($type, $options, $attributes);
		return $this;
	}

	function default(string $default, array $attributes = []) : self
	{
		$this->default = array($default, $attributes);
		return $this;
	}

	/**
	* Shortcut for creating new {@link Route}-based objects
	*
	* @param string $name
	* @param array $attributes
	* @return self
	*/
	static function add(string $name = '', array $attributes = []) : self
	{
		static $prototypes = [];

		$class = get_called_class();
		if (empty($prototypes[ $class ]))
		{
			$prototypes[ $class ] = new $class('');
		}

		// cloning is faster than instantiating,
		// check Ertuo\Lab\New_vs_Clone
		//
		$route = clone $prototypes[ $class ];
		$route->name = $name;
		$route->attributes = $attributes;

		return $route;
	}
}
