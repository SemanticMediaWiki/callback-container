# Callback container

[![CI](https://github.com/SemanticMediaWiki/callback-container/actions/workflows/ci.yml/badge.svg)](https://github.com/SemanticMediaWiki/callback-container/actions/workflows/ci.yml)
![Latest Stable Version](https://img.shields.io/packagist/v/mediawiki/callback-container.svg)
![Total Download Count](https://img.shields.io/packagist/dt/mediawiki/callback-container.svg)
[![codecov](https://codecov.io/gh/SemanticMediaWiki/callback-container/graph/badge.svg?token=Si45N9MsGq)](https://codecov.io/gh/SemanticMediaWiki/callback-container)

A simple object instantiator to lazy load registered callback handlers. Part of the
code base has been extracted from [Semantic MediaWiki][smw] and is now being
deployed as independent library.

## Requirements

* PHP 8.1 or later

## Installation

The recommended installation method for this library is to add
the dependency to your [composer.json][composer].

```json
{
	"require": {
		"mediawiki/callback-container": "~3.0"
	}
}
```

## Usage

```php
use Onoi\CallbackContainer\CallbackContainerFactory;

$callbackContainerFactory = new CallbackContainerFactory();
$containerBuilder = $callbackContainerFactory->newCallbackContainerBuilder();

$containerBuilder->registerCallbackContainer( ... );

$service = $containerBuilder->create( ... );
$service = $containerBuilder->singleton( ... );

```

This [document](/docs/usage.md) contains detailed examples on how to use the `CallbackContainerFactory`
and `ContainerBuilder`.

## Contribution and support

If you want to contribute work to the project please subscribe to the
developers mailing list and have a look at the [contribution guidelinee](/CONTRIBUTING.md). A list
of people who have made contributions in the past can be found [here][contributors].

* [File an issue](https://github.com/SemanticMediaWiki/callback-container/issues)
* [Submit a pull request](https://github.com/SemanticMediaWiki/callback-container/pulls)

### Tests

The library provides unit tests that covers the core-functionality normally run by the
[continues integration platform][travis]. Tests can also be executed manually using the
`composer phpunit` command from the root directory.

## Release notes

- 2.0.0 (2017-02-18)
 - Requires PHP 5.5+
 - Added `CallbackContainerFactory`
 - Added `CallbackContainerBuilder::registerAlias`
 - Added `CallbackContainerBuilder::registerFromFile` to allow loading callback
   definitions from a file

- 1.1.0 (2016-04-30)
 - Fixed issue in `registeredObject` for when a singleton override contained a `null` argument
 - Deprecated the `CallbackLoader` interface in favour of the `CallbackInstantiator` interface
 - Deprecated the `NullCallbackLoader` class in favour of the `NullCallbackInstantiator` class

- 1.0.0 (2015-09-08)
 - Added the `CallbackContainer` and `CallbackLoader` interface
 - Added the `DeferredCallbackLoader` and `NullCallbackLoader` implementation

## License

[GNU General Public License 2.0 or later][license].

[composer]: https://getcomposer.org/
[contributors]: https://github.com/SemanticMediaWiki/callback-container/graphs/contributors
[license]: https://www.gnu.org/copyleft/gpl.html
[smw]: https://github.com/SemanticMediaWiki/SemanticMediaWiki/
