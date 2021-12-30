<?php

namespace Ertuo;

use Ertuo\Route;

class Result
{
	public $path = array();

	public $attributes = array();

	public $junk = array();

	/**
	* What HTTP verbs are allowed with this result
	*
	* @param array $methodMap map of HTTP verbs to attribute keys
	* @return array
	*/
	function allowedMethods(array $methodMap = null) : array
	{
		$methodMap = $methodMap ?? Route::getMethodMap();

		$allowed = array();
		foreach ($methodMap as $method => $key)
		{
			if (isset($this->attributes[ $key ]))
			{
				$allowed[] = $method;
			}
		}

		return $allowed;
	}

	/**
	* Get the handler associated with $httpMethod from this result
	*
	* @param string $httpMethod should be uppercase
	* @param array $methodMap map of HTTP verbs to attribute keys
	* @return null|callable
	*/
	function handler(string $httpMethod, array $methodMap = null)
	{
		$methodMap = $methodMap ?? Route::getMethodMap();
		$found = $this->attributes[ $methodMap[ $httpMethod ] ] ?? null;

		if (!$found && 'HEAD' === $httpMethod)
		{
			$found = $this->attributes[ $methodMap[ 'GET' ] ] ?? null;
		}

		return $found;
 	}
}
