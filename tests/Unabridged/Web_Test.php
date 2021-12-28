<?php

namespace Ertuo\Tests\Unabridged;

use Ertuo\Route;
use Ertuo\Dispatcher;

use PHPUnit\Framework\TestCase;

class Web_Test extends TestCase
{
	protected $dispatcher;

	function setUp() : void
	{
		$routes = Route::add('_app')
		->rule('enum', ['api', 'admin'])->default('web')
		->group(function ()
		{
			yield '' => Route::add('_locale')
				->rule('enum', ['en', 'de'])->default('en')
			->group(function()
			{
				yield '' => Route::add('_controller')
					->rule('enum', ['search', 'contact', 'blog'])
					->default('content')
				->group(function()
				{
					yield 'search' => Route::add('_query')
						->rule('path', ['page']);

					yield 'content' => Route::add('_slug')
						->rule('enum', ['about-us', 'careers', 'privacy'])
						->default('index');

					yield 'blog' => Route::add('_action')
						->rule('enum', ['page', 'post'])
						->default('page')
					->group(function()
					{
						yield 'page' => Route::add('_page')
							->rule('format', ['int'])
							->default('1');

						yield 'post' => Route::add('_id')
							->rule('id');
					});
				});
			});
		});

		$this->dispatcher = new Dispatcher( $routes );
	}

	/**
	* @dataProvider provide_test_unabridged
	*/
	function test_unabridged(array $source, array $attributes, array $path, array $junk)
	{
		$result = $this->dispatcher->dispatch( $source );

// $result->src = $source; print_r($result);

		$this->assertEquals($attributes, $result->attributes);
		$this->assertEquals($path, $result->path);
		$this->assertEquals($junk, $result->junk);
	}

	function provide_test_unabridged()
	{
		return array(
			array([],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], []
			),

			array(['proba'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], ['proba']
			),

			array(['web'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], ['web']
			),

			// ); array(	//////////////////////////////////////

			array(['en'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				['en'], []
			),

			array(['de'],
				['_app' => 'web', '_locale' => 'de',
					'_controller' => 'content',
					'_slug' => 'index'],
				['de'], []
			),

			array(['nl'], // not supported locale
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], ['nl']
			),

			// Content -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

			array(['about-us'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'about-us'],
				['about-us'], []
			),

			array(['en', 'about-us'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'about-us'],
				['en', 'about-us'], []
			),

			array(['de', 'about-us'],
				['_app' => 'web', '_locale' => 'de',
					'_controller' => 'content',
					'_slug' => 'about-us'],
				['de', 'about-us'], []
			),

			array(['about-us2'], // not found page
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], ['about-us2']
			),

			array(['de', 'about-us3'], // not found page
				['_app' => 'web', '_locale' => 'de',
					'_controller' => 'content',
					'_slug' => 'index'],
				['de'], ['about-us3']
			),

			// Contact -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

			array(['contact'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'contact'],
				['contact'], []
			),

			array(['en', 'contact'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'contact'],
				['en', 'contact'], []
			),

			array(['de', 'contact'],
				['_app' => 'web', '_locale' => 'de',
					'_controller' => 'contact'],
				['de', 'contact'], []
			),

			array(['contact', '123'], // page found, but the url is too deep
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'contact'],
				['contact'], ['123']
			),

			array(['nl', 'contact'], // valid page, bad locale
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'content',
					'_slug' => 'index'],
				[], ['nl', 'contact']
			),

			// Blog -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

			array(['blog'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '1'],
				['blog'], []
			),

			array(['en', 'blog'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '1'],
				['en', 'blog'], []
			),

			array(['de', 'blog'],
				['_app' => 'web', '_locale' => 'de',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '1'],
				['de', 'blog'], []
			),

			array(['blog', '1'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '1'],
				['blog', '1'], []
			),

			array(['blog', '2'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '2'],
				['blog', '2'], []
			),

			array(['blog', '02'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '02'],
				['blog', '02'], []
			),

			array(['blog', '2', '3'],	// url too deep
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '2'],
				['blog', '2'], ['3']
			),

			array(['blog', 'page', '4'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '4'],
				['blog', 'page', '4'], []
			),

			array(['blog', 'page', '02'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '02'],
				['blog', 'page', '02'], []
			),

			array(['blog', 'page', '2', '3'],	// url too deep
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'page',
					'_page' => '2'],
				['blog', 'page', '2'], ['3']
			),

			array(['blog', 'post'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'post'],
				['blog', 'post'], []
			),

			array(['blog', 'post', '5'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'post',
					'_id' => '5'],
				['blog', 'post', '5'], []
			),

			array(['blog', 'post', '00013'],
				['_app' => 'web', '_locale' => 'en',
					'_controller' => 'blog',
					'_action' => 'post'],
				['blog', 'post'], ['00013']
			),
		);
	}
}
