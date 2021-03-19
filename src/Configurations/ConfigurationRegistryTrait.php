<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;
use CodeKandis\TiphySentryClientIntegration\Throwables\SentryClientConfiguration;

/**
 * Represents the trait to integrate the `Sentry Client` configuration into a configuration registry.
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

	/**
	 * {@inheritDoc}
	 */
	public function setPlainSentryClientConfiguration( array $plainSentryClientConfiguration ): void
	{
		$this->sentryClientConfiguration = new SentryClientConfiguration( $plainSentryClientConfiguration );
	}
}
