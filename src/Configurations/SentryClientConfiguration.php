<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\Configurations\AbstractConfiguration;
use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;

/**
 * Represents a `SentryClient` configuration.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class SentryClientConfiguration extends AbstractConfiguration implements SentryClientConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getDsn(): string
	{
		return $this->read( 'dsn' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getErrorTypes(): ?int
	{
		return $this->readOrDefault( 'errorTypes', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDisplayErrors(): bool
	{
		return $this->read( 'displayErrors' );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getRelease(): ?string
	{
		return $this->readOrDefault( 'release', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEnvironment(): ?string
	{
		return $this->readOrDefault( 'environment', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSampleRate(): ?float
	{
		return $this->readOrDefault( 'sampleRate', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getMaxBreadcrumbs(): ?int
	{
		return $this->readOrDefault( 'maxBreadcrumbs', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAttachStacktrace(): ?bool
	{
		return $this->readOrDefault( 'attachStacktrace', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSendDefaultPii(): ?bool
	{
		return $this->readOrDefault( 'sendDefaultPii', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getServerName(): ?string
	{
		return $this->readOrDefault( 'serverName', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getInAppExclude(): ?array
	{
		return $this->readOrDefault( 'inAppExclude', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getRequestBodies(): ?string
	{
		return $this->readOrDefault( 'requestBodies', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getIntegrations(): ?string
	{
		return $this->readOrDefault( 'integrations', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDefaultIntegrations(): ?bool
	{
		return $this->readOrDefault( 'defaultIntegrations', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBeforeSend(): ?callable
	{
		return $this->readOrDefault( 'beforeSend', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBeforeBreadcrumb(): ?callable
	{
		return $this->readOrDefault( 'beforeBreadcrumb', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getHttpProxy(): ?string
	{
		return $this->readOrDefault( 'httpProxy', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getCaptureSilencedErrors(): ?bool
	{
		return $this->readOrDefault( 'captureSilencedErrors', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getContextLines(): ?int
	{
		return $this->readOrDefault( 'contextLines', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEnableCompression(): ?bool
	{
		return $this->readOrDefault( 'enableCompression', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExcludedAppPaths(): ?array
	{
		return $this->readOrDefault( 'excludedAppPaths', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExcludedExceptions(): ?array
	{
		return $this->readOrDefault( 'excludedExceptions', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPrefixes(): ?array
	{
		return $this->readOrDefault( 'prefixes', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getProjectRoot(): ?string
	{
		return $this->readOrDefault( 'projectRoot', null ) ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSendAttempts(): ?int
	{
		return $this->readOrDefault( 'sendAttempts', null ) ?? null;
	}
}
