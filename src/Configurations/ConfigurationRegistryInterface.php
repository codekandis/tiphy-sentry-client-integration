<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\Configurations\ConfigurationRegistryInterface as OriginConfigurationRegistryInterface;
use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;

/**
 * Represents the interface of any configuration registry providing a `Sentry Client` configuration.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface extends OriginConfigurationRegistryInterface
{
	/**
	 * Gets the `SentryClient` configuration.
	 * @return ?SentryClientConfigurationInterface The `SentryClient` configuration.
	 */
	public function getSentryClientConfiguration(): ?SentryClientConfigurationInterface;
}
