<?php

namespace Ertuo;

trait MethodTrait
{
	static protected $methodMap = array(
		'GET' => '_route_method_get',
		'POST' => '_route_method_post',
		'PUT' => '_route_method_put',
		'DELETE' => '_route_method_delete',
		'PATCH' => '_route_method_patch',
		'HEAD' => '_route_method_head',
		'OPTIONS' => '_route_method_options',
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
		return $this->assignMethod('GET', $handler);
	}

	function post($handler) : self
	{
		return $this->assignMethod('POST', $handler);
	}

	function put($handler) : self
	{
		return $this->assignMethod('PUT', $handler);
	}

	function delete($handler) : self
	{
		return $this->assignMethod('DELETE', $handler);
	}

	function patch($handler) : self
	{
		return $this->assignMethod('PATCH', $handler);
	}

	function head($handler) : self
	{
		return $this->assignMethod('HEAD', $handler);
	}

	function options($handler) : self
	{
		return $this->assignMethod('OPTIONS', $handler);
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
