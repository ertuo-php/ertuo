<?php

namespace Ertuo\Tests\Unabridged;

use Ertuo\Route;
use Ertuo\RouteAbstract;

class Admin_Test extends Web_Test
{
	function getRoutes() : RouteAbstract
	{
		return Route::add('_app')
			->rule('enum', ['admin', 'api'])
			->default('web');
	}

	function provide_test_unabridged()
	{
		return array(
			array(['admin'],
				['_app' => 'admin'],
				['admin'], []
			),
		);
	}
}
