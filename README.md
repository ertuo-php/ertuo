# Ertuo: quick routing for PHP

**Ertuo** (anagram of "Route"), is a small PHP library that does routing better
than conventional regular expression based routers.

[This article explains how the implementation works and why it is fast.](http://kaloyan.info/writing/2021/12/22/ertuo-php-routing.html "Ertuo, allegedly the fastest PHP routing library")

Ertuo is fast and flexible. Explore the [benchmarks](https://github.com/ertuo-php/lab) for more details.

# Getting Started
```
composer require ertuo-php/router
```

```php
use Ertuo\Route;

$routes = Route::add('_locale')
	->rule('enum', ['en', 'de'])->default('en')
	->group(function()
	{
		yield '' => Route::add('_controller')
		->group(function()
		{
			yield 'blog' => Route::add('', ['_route' => 'blog'])
			->default('page')
			->group(function()
			{
				yield 'page' => Route::add('_page', ['_route' => 'blog_page'])
				->rule('format', ['int'])->default(1);
			});
		});
	});

// Turn the request URI into array
$src = Ertuo\Kit::quickExplode('/blog/page/4/');

// Parse the $src array into a routing result
$result = (new Ertuo\Dispatcher($routes))->dispatch($src);
print_r($result);
/* Ertuo\Result Object
(
    [path] => Array
        (
            [0] => blog
            [1] => page
            [2] => 4
        )

    [attributes] => Array
        (
            [_locale] => en
            [_controller] => blog
            [_route] => blog_page
            [_page] => 4
        )

    [junk] => Array
        (
        )
) */
```

# URI format

In Ertuo the input for the routing process is an array, not a string. This is
unlike the regular expression based routers, where a string with the request URI
is parsed in the routing process.

This array, called **source array**, is just the request URI exploded at the
folder separators (traditionally the `/` char), and stripped of any empty
elements.
```
"/blog/post/hello-world"	-> array("blog", "post", "hello-world")
"/en/about-us//"		-> array("en", "about-us")
"/"				-> array()
```
Use the `Kit::quickExplode()` method to break apart the URI into a source array,
as I tried to make this method be really quick at doing this. You can also use
your own way to split the URI, with the only requirement is that there should
not be any empty elements.

The term **step** will be used for each individual element of the source array.

# Result

The routing process produces `Result` objects. They have 3 properties, and they
are all arrays.

First one is `$result->path`, and this is where all of the recognized steps from
the source array are collected. You can say that these are the "steps taken"
when walking the source array. Comparing the result path and the source array
you can see if the source data was consumed entirely, or somewhere along the
routing process the journey stopped.

Second property is `$result->attributes`. This is where all of the variables
extracted from the routing process are stored. This will include both URI
parameters, as well as attributes found along the way.

Last property is `$result->junk`. This array will contain any steps left from
the source array. This will occur when the routing process stops before all of
the steps to be processed. You can use the result junk to identify bad URIs,
and decide what to do with them: either 404 or other more graceful approach
using the steps already extracted in the result path.

# Routes

Routes in Ertuo are a tree structure, very similar to files and folders on a
filesystem, with each route having one or more routes nested inside it.

### Route Declaration

Default way of declaring routes is using the `Route::add()` method

```php
use Ertuo\Route;

$routes = Route::add() ...
```

To add nested routes, use the `Route::group()` method. Its argument is a
callback that returns something `iterable`, like an array, an iterator or a generator.
The keys of the `iterable` output are used when looking for the next route in
the routing process

```php
yield 'blog' => Route::add()
->group(function()
{
	yield 'page' => Route::add('_page') ...

	yield 'post' => Route::add('_slug') ...
});
```

The keys of the `iterable` are indeed used to find the next route in the routing
process. In some occasions though, specially when there are rules involved, you
need to be able to have a "default" next route. That is a route that is called
when either the value of the current step is not accepted, or if the current
step is empty. To declare such a "default" route, use an empty string as its key

```php
yield 'blog' => Route::add()
->group(function()
{
	yield '' => Route::add() ... // this is the default route

	yield 'page' => Route::add('_page') ...

	yield 'post' => Route::add('_slug') ...
});
```

### Route Keys

Routes have optional property called "key". It is used as the key with which to
store the value of the accepted step from the rule into the result attributes.
The route key is the first argument to `Route::add()`.
```php
yield '' => Route::add('_locale') ... // Route key is "_locale"
```
When routing, the value accepted by the above route will be present at `$result->attributes['_locale']`.

### Route Attributes

Additionally, routes have attributes associated with them. Think of them as the
contents of a file. When a route is being processed, its attributes are added to
the routing results. The attributes are optional, and they are the second argument
to `Route::add()` method.

```php
yield 'blog' => Route::add('', ['i.am' => 'the.walrus']);
```

You can also use the `Route::carry()` method to explicitly assign the route attributes.

```php
yield 'blog' => Route::add()->carry(['i.am' => 'the.walrus']);
```

### Route Rule

Each route has a "rule" that is used to find if that route will accept the
value of the current step from the source array. You can read more about rules
in their section below.

If the value of the current step is accepted, this step is going to be included
in the result path using the route key. For example, if a route key is `_locale`
and has a rule that accepts current step `"en"`, then the `$result->attributes`
will have an element called `_locale` with `"en"` as its value.

You declare rules using the `Route::rule()` method. First argument is the
type of the rule, and the second argument is an array with options for the rule.

```php
// Using "enum" rule where the allowed steps are either "en" or "de"
yield 'locale' => Route::add('_locale')->rule('enum', ['en', 'de'])
```

There is an optional third argument, that is an array with attributes to the
assigned to the result if the rule successfully accepts the current step. This
helps to introduce extra attributes when there is a step accepted.

```php
yield 'locale' => Route::add('_locale')->rule('enum', ['en', 'de'], ['has_locale' => true])
```

### Route Default

When not able to validate the current step against the route rule, the routing
process will look for fallback data associated with the route. This situation
is also triggered when the current step is empty, as route rules only work with
non-empty steps.

The default fallback data is made of two parts:

* first, a default value to be returned as accepted instead of the current step

* second, an array with default attributes to use instead of the route attributes

You declare the default fallback data using `Route::default()` method
```php
yield 'locale' => Route::add('_locale')->default('en', ['has_locale' => false])
```

### Route Methods

The `Route` class has shortcut methods for all of the HTTP methods. Use
them if you want to attach handlers (aka controllers, actions) for specific
methods on a route.

```php
yield '' => Route::add()
	->get('BlogPost::show')
	->post('BlogPost::update') ...
```

These shortcut methods will store these handlers inside the route attributes using
a predefined key map. By default the keys are with `_request_method_` prefix,
like `_request_method_get` for `GET` method. Please try to be careful not to
overwrite these with some of your own attributes.

You can get the handler/controller/action from the result, call `$result->handler()`:

```php
$handler = $result->handler( $_SERVER['REQUEST_METHOD'] );
```

You can also get the list of allowed HTTP methods associated with a result by
calling `$result->allowedMethods()`.

# Dispatching

A **source array** is dispatched by calling the `dispatch()` method of the
dispatcher.

```php
$result = $dispatcher->dispatch($src);
```

Considering that the routing process in Ertuo is sort of a chain process,
occasionally you will need to pass some information before the routing starts.
You can do this by creating a `Result` object in advance and passing it as
the second argument to `dispatch()`:

```php
$before = new Ertuo\Result;
$before->attributes['time'] = time();

$result = $dispatcher->dispatch($src, $before);
```

The default dispatcher implementation is `Dispatcher`. You create
the dispatcher by passing the routes definition as its first argument  

```php
$dispatcher = new Ertuo\Dispatcher($routes);
```

The second argument is a rules aggregate object. This is the collection of rules
that is referenced in the routes definition. If you omit the second argument,
there is a default rules aggregate object creates from `Rules\DefaultAggregate`.

More information about the rules aggregates is in the "Rules" section below.

# Route Rules

The rules are simple checks. They are applied to steps going through the routes.
Each route has its own rule. All of the rules referenced in the routing process
are read from a rules aggregate.

Rules are attached to each route using `Route::rule()`
```php
yield '' => Route::add('_id')->rule('id') ...
```

In most cases rules require additional arguments, and these are passed using an
array as the second argument to `Route::rule()`
```php
yield 'locale' => Route::add('_locale')->rule('enum', ['en', 'de'])
```

### Available Rules

There are some rules bundled wit Ertuo that you can use right away. You can find
them declared in the default aggregate `Rule\DefaultAggregate`.

* `"any"` will accept any non-empty value
* `"enum"` will accept a value against a list of predefined options
* `"exact"` will accept against a single value
* `"format"` is using regular expressions to accept different formats such
	as `int`, `alpha`, `alphanum`, `year`, `month`, `slug`, `var`;
	optionally, you can declare your own formats as well
* `"id"` will accept positive integer values
* `"path"` is a greedy rule that will accept any non-empty value until either
	the source array is depleted or some specific value is met
* `"range"` will accept values within a range

### Direct Rule

You can leave the rule of a route empty. This happens if you do not explicitly
declare what rule a route should use. In this case the dispatcher does not call
anything from the rule aggregate. Instead it uses the current step to identify
what is the next route. This only happens with non-empty steps, and the default
route (the one identified with an empty string) will never be invoked.

### Rule Aggregate

During the routing process, the routes will reference different rules. These
are read from a collection of rules that is passed to the dispatcher object. Its
purpose is to allow for more rules re-use as there will be only a few that are
used in each routing.   

You can read the current rule aggregate from the dispatcher using
`Dispatcher::getRules()` method
```php
$arg = $dispatcher->getRules();
```

You can add more rules to the rule aggregate.

```php
$arg->add('uuid', new UUIDRule());
```

There is a way to add the rules in a _lazy_ way, using a callback that will
be triggered only if the rule is requested

```php
$arg->lazy('uuid', fn() => new UUIDRule());
```

### Alias Rules

There are situations when it is helpful to add an alias to an existing rule
and bundle with some specific options. Here is an example of how to do this by
creating a `"locale"` alias rule that is actually `"enum"` rule with specific
options

```php
$arg->alias('locale', $arg->fetchRule('enum'), array('en', 'de', 'bg'));
```

You can now reference `"locale"` as a rule in the routes without passing any
options as arguments
```php
yield 'locale' => Route::add('_locale')->rule('locale') ...
```

### Composite Rules

Similar to alias rules, there are situations when you need a route rule to
be able to do several different checks. You can achieve this with a composite
rule. It is simply a list of rules that will be called consecutively until
either the value of the current step is accepted, or when the list of composite
rules is depleted.

```php
// create a composite rule from "id" and "any" rules
$agg->lazy('blog_post',
	fn() => new Ertuo\Rule\CompositeRule(
		$agg->fetchRule('id'),
		$agg->fetchRule('any')
		)
	);
```

### Custom Rules

You are not limited to the available rules. You can create your own using the
`RuleInterface` interface, and using your own logic inside it. The one important
restriction to follow is to only work with non-empty steps.

```php
use Ertuo\Result;
use Ertuo\Rule\RuleInterface;

class HanShotFirstRule implements RuleInterface
{
	function accept(string $step, array $options, Result $result) : bool
	{
		return !empty($step) && !empty($result->attributes['han.shot']);
	}
}
```

As the routing process is a chain process, you can use the data accumulated in
the result object as well. This will allow you to make decisions based on
whether some details have already been collected in the result or not.

# Export

You can dump of all of the routes as array using `Route::toArray()`. This is
helpful in situations when you need to work with the whole complete set of routes.

This is used internally by the ["builders"](https://github.com/ertuo-php/builder)
and the unfolded routes. You can read more about them in the section below.

# Builders

You can use the "builders" to create the PHP code for the route declaration.
Under the hood the builders are using the output from `Route::toArray()`.

Read more about the builders at https://github.com/ertuo-php/builder  

# Unfolded Routes

There are benefits in working with "constant" arrays when `opcache` is enabled.
The "constant" arrays are such that are only read and they are never changed.

To take advantage of this, you can use the `UnfoldedRoute` class. It stores a
fully unfolded routes tree that is a complete set of routes created from
`Route::toArray()` or other implementations of `ExportInterface`.

```php
use Ertuo\Route;
use Ertuo\UnfoldedRoute;

$unfoldedRoutesFilename = '/somewhere/where/routes/live/unfolded.php';

if (!is_file($unfoldedRoutesFilename))
{
	$routes = Route::add('_locale')->rule( ... );

	file_put_contents(
		$unfoldedRoutesFilename,
		'<?php return '
			. var_export($routes->toArray(), true)
			. ';'
	);
}

$unfolded = include $unfoldedRoutesFilename;
$routes = UnfoldedRoute::fromArray($unfolded);
```

# A Better Example

Let me show you a richer example than the one from "Getting Started".

While that first example used generators, let's use arrays for this one.

First, let's imagine there's the ability to use a locale at the beginning of the
URIs, and the available options are `"en"` and `"de"`. If the local is omitted,
let's assume `"en"` as the default locale.

For this example let's assume there are 4 controllers:

1. `"search"` where we will use multiple steps as the search query
1. `"contact"` as a contact form page
1. `"content"` for rendering content pages
1. `"blog"` controller

The `"content"` controller will render one of these 4 pages:

* `"about-us"`
* `"careers"`  
* `"privacy"`
* `"index"`, that is actually the content rendered on the home page.

The `"blog"` controller will do two things:

* browsing the blog posts in pages using pagination URIs, where the number is
 	either directly the next step (`"blog/3"`), or there is a `"page"`
	prefix before the page number (`"blog/page/2"`)

* read individual posts, with a format where the posts are identified by a slug
	with the `"post"` prefix before it (`"blog/post/han-shot-first"`); if
	the post slug is omitted, return `"404"` as the post slug

So, here is the routes declaration:

```php
use Ertuo\Route;

$routes = Route::add('_locale')
	->rule('enum', ['en', 'de'])->default('en')
	->group(function()
	{
		return array(

		'' => Route::add('_controller')->default('content')
		->group(function()
		{
			return array(

			'search' => Route::add('_query', ['_route' => 'search'])
			->rule('path', ['page']),

			'content' => Route::add('_slug', ['_route' => 'content'])
			->rule('enum', ['about-us', 'careers', 'privacy'],
				['_route' => 'content_slug'])
			->default('index', ['_route' => 'content_slug']),

			'contact' => Route::add('', ['_route' => 'contact']),

			'blog' => Route::add('', ['_route' => 'blog'])
			->default('page')
			->group(function()
			{
				return array(

				'page' => Route::add('_page', ['_route' => 'blog_page'])
				->rule('id')
				->default(1),

				'post' => Route::add('_slug')
				->rule('format', ['slug'])
				->default('404')

				);
			}));
		}));
	});
```

With the routes declared, you just need a source array to run against a
dispatcher created from those routes:

```php
$src = [];	// source array for "/" request URI

$result = (new Ertuo\Dispatcher($routes))->dispatch($src);
print_r($result);
```

Here's a list of source arrays to try on this example:

```php
$src = []; 				// homepage in "en" (default locale)
$src = ['de'];				// homepage in "de"
$src = ['contact'];			// contact in "en"
$src = ['search', 'test', 'unit'];	// search in "en" for "test" and "unit"
$src = ['blog'];			// blog in "en", browsing page=1
$src = ['en', 'blog', '2'];		// blog in "en", browsing page=2
$src = ['en', 'blog', 'page', '4'];	// blog in "en", browsing page=4
$src = ['de', 'blog', 'post'];		// blog in "de", missing post slug, slug="404"
$src = ['blog', 'post', 'the-goat'];	// blog in "en", post slug="the-goat"
$src = ['en', 'about-us'];		// content in "en"

```

Here are a few source arrays that will be partially processed, e.g. they will
have junk in their result:

```php
$src = ['index'];			// bad locale, no such content page declared
$src = ['en', 'blog', 'page', 'x5'];	// bad page format
$src = ['blog', 'post', 'i_know'];	// bad slug format
```

# Benchmarks

You can explore the benchmarks and their results at https://github.com/ertuo-php/lab
