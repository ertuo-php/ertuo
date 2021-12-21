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
		$key = $this->methodMap[ $method ] ?? "_route_method_{$method}";
		$this->attributes[ $key ] = $handler;

		return $this;
	}

	function get($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function post($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function put($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function delete($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function patch($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function head($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}

	function options($handler)
	{
		return $this->assignMethod(__FUNCTION__, $handler);
	}
}
