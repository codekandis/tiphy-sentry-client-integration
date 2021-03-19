<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Development\Throwables\Actions;

use CodeKandis\Tiphy\Actions\ActionInterface;
use CodeKandis\Tiphy\Http\Responses\JsonResponder;
use CodeKandis\Tiphy\Http\Responses\StatusCodes;
use CodeKandis\Tiphy\Http\Responses\StatusMessages;
use CodeKandis\Tiphy\Throwables\ErrorInformation;
use CodeKandis\TiphySentryClientIntegration\Development\Throwables\SerializableThrowableWrapper;
use JsonException;
use Throwable;

/**
 * Represents the default action if an unhandled error occurred during processing the request.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class InternalServerErrorAction implements ActionInterface
{
	/**
	 * Stores the throwable to respond its data.
	 * @var Throwable
	 */
	private Throwable $throwable;

	/**
	 * Constructor method.
	 * @param Throwable $throwable The throwable to respond its data.
	 */
	public function __construct( Throwable $throwable )
	{
		$this->throwable = $throwable;
	}

	/**
	 * {@inheritDoc}
	 * @throws JsonException An error occurred during the creation of the JSON response.
	 */
	public function execute(): void
	{
		$errorInformation = new ErrorInformation(
			StatusCodes::INTERNAL_SERVER_ERROR,
			StatusMessages::INTERNAL_SERVER_ERROR,
			new SerializableThrowableWrapper( $this->throwable )
		);
		( new JsonResponder( StatusCodes::INTERNAL_SERVER_ERROR, null, $errorInformation ) )
			->respond();
	}
}
