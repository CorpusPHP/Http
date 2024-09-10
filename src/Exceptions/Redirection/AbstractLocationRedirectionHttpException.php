<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Exceptions\AbstractHttpException;

/**
 * Base of 3xx Exceptions which include a "Location" header.
 */
abstract class AbstractLocationRedirectionHttpException extends AbstractHttpException {

	/** @var string */
	protected $location;

	/**
	 * AbstractRedirectionHttpException constructor.
	 *
	 * @param \Throwable|null $previous [optional] The previous throwable used for the exception chaining.
	 */
	public function __construct( string $location, string $message = '', ?\Throwable $previous = null ) {
		$this->location = $location;

		parent::__construct($message, $previous);
	}

	public function getLocation() : string {
		return $this->location;
	}

}
