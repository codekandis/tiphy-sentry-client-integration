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
	 * {@inheritdoc}
	 */
	public function getDsn(): string
	{
		return $this->data[ 'dsn' ];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getErrorTypes(): ?int
	{
		return $this->data[ 'errorTypes' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDisplayErrors(): bool
	{
		return $this->data[ 'displayErrors' ];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getRelease(): ?string
	{
		return $this->data[ 'release' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getEnvironment(): ?string
	{
		return $this->data[ 'environment' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSampleRate(): ?float
	{
		return $this->data[ 'sampleRate' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getMaxBreadcrumbs(): ?int
	{
		return $this->data[ 'maxBreadcrumbs' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAttachStacktrace(): ?bool
	{
		return $this->data[ 'attachStacktrace' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSendDefaultPii(): ?bool
	{
		return $this->data[ 'sendDefaultPii' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getServerName(): ?string
	{
		return $this->data[ 'serverName' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getInAppExclude(): ?array
	{
		return $this->data[ 'inAppExclude' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getRequestBodies(): ?string
	{
		return $this->data[ 'requestBodies' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getIntegrations(): ?string
	{
		return $this->data[ 'integrations' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDefaultIntegrations(): ?bool
	{
		return $this->data[ 'defaultIntegrations' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBeforeSend(): ?callable
	{
		return $this->data[ 'beforeSend' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBeforeBreadcrumb(): ?callable
	{
		return $this->data[ 'beforeBreadcrumb' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getHttpProxy(): ?string
	{
		return $this->data[ 'httpProxy' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCaptureSilencedErrors(): ?bool
	{
		return $this->data[ 'captureSilencedErrors' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getContextLines(): ?int
	{
		return $this->data[ 'contextLines' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getEnableCompression(): ?bool
	{
		return $this->data[ 'enableCompression' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getExcludedAppPaths(): ?array
	{
		return $this->data[ 'excludedAppPaths' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getExcludedExceptions(): ?array
	{
		return $this->data[ 'excludedExceptions' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getPrefixes(): ?array
	{
		return $this->data[ 'prefixes' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getProjectRoot(): ?string
	{
		return $this->data[ 'projectRoot' ] ?? null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSendAttempts(): ?int
	{
		return $this->data[ 'sendAttempts' ] ?? null;
	}
}
