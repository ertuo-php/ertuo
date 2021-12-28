<?php

namespace Ertuo\Tests\Unabridged;

use Ertuo\Route; 

class API_Test extends Web_Test
{
	function getRoutes() : Route
	{
		return Route::add('_app')
		->rule('enum', ['api', 'admin'])->default('web')
		->group(function()
		{
			yield 'api' => Route::add('_version')
			->rule('enum', ['v1', 'v2'])
			->group(function()
			{
				yield '' => Route::add('_resource')
				->rule('enum', ['users', 'items']);
			});
		});
	}

	function provide_test_unabridged()
	{
		return array(
			array(['api'],
				['_app' => 'api'],
				['api'], []
			),
			array(['api', 'v1'],
				['_app' => 'api', '_version' => 'v1'],
				['api', 'v1'], []
			),
			array(['api', 'v3'],	// bad version
				['_app' => 'api'],
				['api'], ['v3']
			),
			array(['api', 'v1', 'users'],
				['_app' => 'api', '_version' => 'v1',
					'_resource' => 'users'],
				['api', 'v1', 'users'], []
			),
			array(['api', 'v2', 'customers'],	// bad resource
				['_app' => 'api', '_version' => 'v2'],
				['api', 'v2'], ['customers']
			),
		);
	}
}
