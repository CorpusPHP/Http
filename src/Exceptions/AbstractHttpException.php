<?php

namespace Corpus\Http\Exceptions;

use Corpus\Http\StatusAwareInterface;

/**
 * Base Exception class all HTTP Exception Classes Extend
 */
abstract class AbstractHttpException extends \RuntimeException implements StatusAwareInterface {

	public function __construct( $message = '', ?\Throwable $previous = null ) {
		parent::__construct($message, $this->getHttpStatusCode(), $previous);
	}

}
