# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [0.9.0] - 2021-10-18

### Removed

* obsolete abstract configuration registry

### Changed

* `composer.json`
* `README.md`

[0.9.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.8.0..0.9.0

---
## [0.8.0] - 2021-10-18

### Changed

* implemented `codekandis/configurations` to replace configuration implementations

[0.8.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.7.1..0.8.0

---
## [0.7.1] - 2021-09-03

### Fixed

* namespace of the sentry client configuration

[0.7.1]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.7.0..0.7.1

---
## [0.7.0] - 2021-03-20

### Added

* `CODE_OF_CONDUCT.md`

### Changed

* inheritance of `ConfigurationRegistryInterface`

[0.7.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.6.0..0.7.0

---
## [0.6.0] - 2021-03-19

### Added

* `500 Internal Server Error` handling for development purposes

### Fixes

* PHPDoc

[0.6.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.5.0..0.6.0

---
## [0.5.0] - 2021-02-02

### Added

* configuration registry trait implementing the `ConfigurationRegistryInterface`

[0.5.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.4.0..0.5.0

---
## [0.4.0] - 2021-01-29

### Changed

* configuration instantiation
* `README.md`

[0.4.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.3.0..0.4.0

---
## [0.3.0] - 2021-01-27

### Changed

* composer package dependencies
  * removes
    * `sensiolabs/security-checker`
    * `phpunit/phpunit`
  * changes
    * `minimum-stability` [stable]
    * `codekandis/sentry-client` [^1]
  * adds
    * `codekandis/phpunit` [^3]
* `PHPUnit` configuration

### Added

* `LICENSE`
* `REAMDE.md`
* `CHANGELOG.md`

[0.3.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.2.0..0.3.0

---
## [0.2.0] - 2020-10-05

### Changed

* composer package dependencies
  * changed
    * `php` [^7.4]
* refactored source code `PHP 7.4` compliant

[0.2.0]: https://github.com/codekandis/tiphy-sentry-client-integration/compare/0.1.0..0.2.0

---
## [0.1.0] - 2020-02-02

### Added

* `SentryClientConfiguration` as the default Sentry Client configuration
* `ConfigurationRegistryInterface` representing the interface for all configuration registries providing Sentry Client configurations
* `AbstractConfigurationRegistry` providing a default Sentry Client configuration
* `InternalServerErrorThrowableHandler` representing a default throwable handler for the `codekandis/tiphy` action dispatcher

[0.1.0]: https://github.com/codekandis/tiphy-sentry-client-integration/tree/0.1.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
