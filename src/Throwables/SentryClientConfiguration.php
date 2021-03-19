<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Throwables;

use CodeKandis\SentryClient\Configurations\SentryClientConfigurationInterface;
use CodeKandis\Tiphy\Configurations\AbstractConfiguration;

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
		return $this->data[ 'dsn' ];
	}

	/**
	 * {@inheritDoc}
	 */
	public function getErrorTypes(): ?int
	{
		return $this->data[ 'errorTypes' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDisplayErrors(): bool
	{
		return $this->data[ 'displayErrors' ];
	}

	/**
	 * {@inheritDoc}
	 */
	public function getRelease(): ?string
	{
		return $this->data[ 'release' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEnvironment(): ?string
	{
		return $this->data[ 'environment' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSampleRate(): ?float
	{
		return $this->data[ 'sampleRate' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getMaxBreadcrumbs(): ?int
	{
		return $this->data[ 'maxBreadcrumbs' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAttachStacktrace(): ?bool
	{
		return $this->data[ 'attachStacktrace' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSendDefaultPii(): ?bool
	{
		return $this->data[ 'sendDefaultPii' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getServerName(): ?string
	{
		return $this->data[ 'serverName' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getInAppExclude(): ?array
	{
		return $this->data[ 'inAppExclude' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getRequestBodies(): ?string
	{
		return $this->data[ 'requestBodies' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getIntegrations(): ?string
	{
		return $this->data[ 'integrations' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDefaultIntegrations(): ?bool
	{
		return $this->data[ 'defaultIntegrations' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBeforeSend(): ?callable
	{
		return $this->data[ 'beforeSend' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBeforeBreadcrumb(): ?callable
	{
		return $this->data[ 'beforeBreadcrumb' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getHttpProxy(): ?string
	{
		return $this->data[ 'httpProxy' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getCaptureSilencedErrors(): ?bool
	{
		return $this->data[ 'captureSilencedErrors' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getContextLines(): ?int
	{
		return $this->data[ 'contextLines' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEnableCompression(): ?bool
	{
		return $this->data[ 'enableCompression' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExcludedAppPaths(): ?array
	{
		return $this->data[ 'excludedAppPaths' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExcludedExceptions(): ?array
	{
		return $this->data[ 'excludedExceptions' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPrefixes(): ?array
	{
		return $this->data[ 'prefixes' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getProjectRoot(): ?string
	{
		return $this->data[ 'projectRoot' ] ?? null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSendAttempts(): ?int
	{
		return $this->data[ 'sendAttempts' ] ?? null;
	}
}
