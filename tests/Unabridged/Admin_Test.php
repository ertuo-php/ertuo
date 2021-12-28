<?php

namespace Ertuo\Tests\Unabridged;

use Ertuo\Route;
use Ertuo\Dispatcher;

class Admin_Test extends Web_Test
{
	function setUp() : void
	{
		$routes = Route::add('_app')->rule('enum', ['admin', 'api'])->default('web');

		$this->dispatcher = new Dispatcher( $routes );
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
