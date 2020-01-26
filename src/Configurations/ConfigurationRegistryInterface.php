<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;

/**
 * Represents the interface of all configuration registries.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface
{
	/**
	 * Sets the path of the `SentryClient` configuration.
	 * @param string $path The path of the `SentryClient` configuration.
	 */
	public function setSentryClientConfigurationPath( string $path ): void;

	/**
	 * Gets the `SentryClient` configuration.
	 * @return SentryClientConfigurationInterface The `SentryClient` configuration.
	 */
	public function getSentryClientConfiguration(): SentryClientConfigurationInterface;
}
