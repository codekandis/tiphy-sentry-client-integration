<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;
use CodeKandis\Tiphy\Configurations\AbstractConfigurationRegistry as OriginAbstractConfigurationRegistry;
use CodeKandis\TiphySentryClientIntegration\Throwables\SentryClientConfiguration;

/**
 * Represents the base class of all configuration registries.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConfigurationRegistry extends OriginAbstractConfigurationRegistry implements ConfigurationRegistryInterface
{
	/**
	 * Stores the `SentryClient` configuration.
	 * @var ?SentryClientConfigurationInterface
	 */
	private ?SentryClientConfigurationInterface $sentryClientConfiguration = null;

	/**
	 * @inheritDoc
	 */
	public function getSentryClientConfiguration(): ?SentryClientConfigurationInterface
	{
		return $this->sentryClientConfiguration;
	}

	/**
	 * @inheritDoc
	 */
	public function setPlainSentryClientConfiguration( array $plainSentryClientConfiguration ): void
	{
		$this->sentryClientConfiguration = new SentryClientConfiguration( $plainSentryClientConfiguration );
	}
}
