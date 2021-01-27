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
	 * Stores the path of the `SentryClient` configuration.
	 * @var string
	 */
	private string $sentryClientConfigurationPath = '';

	/**
	 * Stores the `SentryClient` configuration.
	 * @var SentryClientConfigurationInterface
	 */
	private SentryClientConfigurationInterface $sentryClientConfiguration;

	/**
	 * @inheritDoc
	 */
	public function setSentryClientConfigurationPath( string $path ): void
	{
		$this->sentryClientConfigurationPath = $path;
	}

	/**
	 * @inheritDoc
	 */
	public function getSentryClientConfiguration(): SentryClientConfigurationInterface
	{
		return $this->sentryClientConfiguration
			   ?? $this->sentryClientConfiguration = new SentryClientConfiguration( $this->sentryClientConfigurationPath );
	}
}
