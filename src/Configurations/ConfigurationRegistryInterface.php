<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;

/**
 * Represents the interface of all configuration registries providing a `Sentry Client` configuration.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface
{
	/**
	 * Gets the `SentryClient` configuration.
	 * @return ?SentryClientConfigurationInterface The `SentryClient` configuration.
	 */
	public function getSentryClientConfiguration(): ?SentryClientConfigurationInterface;

	/**
	 * Sets the plain `SentryClient` configuration.
	 * @param array $plainSentryClientConfiguration The plain `SentryClient` configuration.
	 */
	public function setPlainSentryClientConfiguration( array $plainSentryClientConfiguration ): void;
}
