<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Development\Throwables\Handlers;

use CodeKandis\SentryClient\SentryClientInterface;
use CodeKandis\Tiphy\Throwables\Handlers\ThrowableHandlerInterface;
use CodeKandis\TiphySentryClientIntegration\Development\Throwables\Actions\InternalServerErrorAction;
use JsonException;
use Throwable;

/**
 * Represents a throwable handler using the `SentryClient` and `InternalServerErrorAction`.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class InternalServerErrorThrowableHandler implements ThrowableHandlerInterface
{
	/**
	 * Stores the `SentryClient`.
	 * @var SentryClientInterface
	 */
	private SentryClientInterface $sentryClient;

	/**
	 * Constructor method.
	 * @param SentryClientInterface $sentryClient The `SentryClient`.
	 */
	public function __construct( SentryClientInterface $sentryClient )
	{
		$this->sentryClient = $sentryClient;
	}

	/**
	 * Executes the throwable handler.
	 * @param Throwable $throwable The throwable to respond its data.
	 * @throws JsonException An error occured during the `JSON` encoding of the response.
	 */
	public function execute( Throwable $throwable ): void
	{
		$this->sentryClient->captureThrowable( $throwable );
		( new InternalServerErrorAction( $throwable ) )
			->execute();
	}
}
