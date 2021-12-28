<?php

namespace Ertuo;

trait MethodTrait
{
	static protected $methodMap = array(
		'get' => '_get',
		'post' => '_post',
		'put' => '_put',
		'delete' => '_delete',
		'patch' => '_patch',
		'head' => '_head',
		'options' => '_options',
	);

	static function getMethodMap() : array
	{
		return self::$methodMap;
	}

	static function setMethodMap(array $map) : self
	{
		self::$methodMap = $map;
	}

	protected function assignMethod($method, $handler) : self
	{
		$key = self::$methodMap[ $method ] ?? "_route_method_{$method}";
		$this->attributes[ $key ] = $handler;

		return $this;
	}

	function get($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function post($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function put($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function delete($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function patch($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function head($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function options($handler) : self
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function match($handler, ...$methods) : self
	{
		foreach ($methods as $method)
		{
			if (!empty(self::$methodMap[ $method ]))
			{
				$this->assignMethod($method, $handler);
			}
		}

		return $this;
	}

	function any($handler) : self
	{
		foreach (self::$methodMap as $method => $key)
		{
			$this->assignMethod($method, $handler);
		}

		return $this;
	}
}
