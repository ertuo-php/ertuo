<?php

namespace Ertuo\Tests;

use Ertuo\RouteAbstract;
use Ertuo\Tests\Unabridged\Web_Test;
use Ertuo\UnfoldedRoute;
use PHPUnit\Framework\TestCase;

use function file_put_contents;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;

class UnfoldedRouteTest extends Web_Test
{
	function getRoutes() : RouteAbstract
	{
		file_put_contents(
			$unfolded = tempnam(sys_get_temp_dir(), 'unfolded'),
			'<?php return '
				. var_export(parent::getRoutes()->toArray(), 1)
				. ';'
		);

		$routes = UnfoldedRoute::fromArray(include $unfolded);
		unlink($unfolded);

		return $routes;
	}

	function testCompareExportedArrays()
	{
		$parent = parent::getRoutes()->toArray();
		$unfolded = $this->getRoutes()->toArray();

		$this->assertEquals($parent, $unfolded);
	}
}
