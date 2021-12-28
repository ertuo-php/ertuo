<?php

namespace Ertuo\Builder;

use Ertuo\ExportInterface;

/**
* Builder Rig: a helper to assist with extending the array dump from a route tree
*/
class Rig implements ExportInterface
{
	protected $tree = array();

	function __construct(ExportInterface $route)
	{
		$this->setTree( $route->toArray() );
	}

	function setTree(array $tree) : self
	{
		$this->tree = $tree;
		return $this;
	}

	/**
	* @see ExportInterface::toArray()
	*/
	function toArray() : array
	{
		return $this->tree;
	}
}
