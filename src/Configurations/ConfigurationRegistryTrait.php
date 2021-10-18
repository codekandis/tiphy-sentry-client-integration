<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;

/**
 * Represents the trait to integrate a `Sentry Client` configuration into a configuration registry.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ConfigurationRegistryTrait
{
	/**
	 * Stores the `SentryClient` configuration.
	 * @var ?SentryClientConfigurationInterface
	 */
	private ?SentryClientConfigurationInterface $sentryClientConfiguration = null;

	/**
	 * {@inheritDoc}
	 */
	public function getSentryClientConfiguration(): ?SentryClientConfigurationInterface
	{
		return $this->sentryClientConfiguration;
	}
}
