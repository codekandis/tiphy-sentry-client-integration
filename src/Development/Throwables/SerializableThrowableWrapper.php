<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Development\Throwables;

use JsonSerializable;
use Throwable;

/**
 * Represents a serializable throwable wrapper.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
class SerializableThrowableWrapper implements JsonSerializable
{
	/**
	 * Stores the throwable to wrap.
	 * @var Throwable
	 */
	private Throwable $throwable;

	/**
	 * Constructor method.
	 * @param Throwable $throwable The throwable to wrap.
	 */
	public function __construct( Throwable $throwable )
	{
		$this->throwable = $throwable;
	}

	/**
	 * Gets the JSON serializable data of the wrapped throwable.
	 * @return mixed The JSON serializable data of the wrapped throwable.
	 */
	public function jsonSerialize()
	{
		$previousException = $this->throwable->getPrevious();

		return [
			'code'              => $this->throwable->getCode(),
			'message'           => $this->throwable->getMessage(),
			'file'              => $this->throwable->getFile(),
			'line'              => $this->throwable->getLine(),
			'previousException' => null === $previousException
				? null
				: ( new SerializableThrowableWrapper( $previousException ) )
					->jsonSerialize(),
			'trace'             => $this->throwable->getTrace()
		];
	}
}
