# codekandis/tiphy-sentry-client-integration

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/tiphy-sentry-client-integration` is a library to integrate [`codekandis/sentry-client`][xtlink-github-codekandis-sentry-client] into [`codekandis/tiphy`][xtlink-github-codekandis-tiphy].

## Index

* [Installation](#installation)
* [How to use](#how-to-use)

## Installation

Install the latest version with

```bash
$ composer require codekandis/tiphy-sentry-client-integration
```

## How to use

### Create a configuration

Just inject the [`InternalServerErrorThrowableHandler`][srclink-throwable-handler] into the [`ActionDispatcher`][xtlink-github-codekandis-tiphy-action-dispatcher].

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project;

use CodeKandis\SentryClient\SentryClient;
use CodeKandis\Tiphy\Actions\ActionDispatcher;
use CodeKandis\TiphySentryClientIntegration\Throwables\Handlers\InternalServerErrorThrowableHandler;
use CodeKandis\TiphySentryClientIntegration\Throwables\SentryClientConfiguration;

$routesConfiguration = /** ... */;
$preDispatcher       = /** ... */;
$throwableHandler    = new InternalServerErrorThrowableHandler(
	new SentryClient(
		new SentryClientConfiguration(
			[ /** ... */ ]
		)
	)
);

( new ActionDispatcher( $routesConfiguration, $preDispatcher, $throwableHandler ) )
->dispatch();
```


[xtlink-version-badge]: https://img.shields.io/badge/version-0.10.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-0%25-red.svg
[xtlink-php-net]: https://php.net
[xtlink-github-codekandis-sentry-client]: https://github.com/codekandis/sentry-client
[xtlink-github-codekandis-tiphy]: https://github.com/codekandis/tiphy
[xtlink-github-codekandis-tiphy-action-dispatcher]: https://github.com/codekandis/tiphy/blob/master/src/Actions/ActionDispatcher.php

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
[srclink-throwable-handler]: ./src/Throwables/Handlers/InternalServerErrorThrowableHandler.php
