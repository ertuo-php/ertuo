<?php

namespace Ertuo\Tests\Builder;

use Ertuo\Builder\BuilderInterface;
use Ertuo\Route;
use Ertuo\Tests\Unabridged\Web_Test;

use function file_put_contents;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;

abstract class BuilderTestAbstract extends Web_Test
{
	abstract function getBuilder() : BuilderInterface;

	function getRoutes() : Route
	{
		file_put_contents(
			$tree = tempnam(sys_get_temp_dir(), 'builder'),
			$php = $this->getBuilder()->buildTree( parent::getRoutes() )
		);

		$routes = include $tree;
		unlink($tree);

		return $routes;
	}

	function testCompareExportedArrays()
	{
		$parent = parent::getRoutes()->toArray();
		$current = $this->getRoutes()->toArray();

		$this->assertEquals($parent, $current);
	}
}
