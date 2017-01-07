<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Exceptions\AbstractHttpException;

abstract class AbstractRedirectionHttpException extends AbstractHttpException {

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * AbstractRedirectionHttpException constructor.
	 *
	 * @param string     $url
	 * @param string     $message
	 * @param \Throwable $previous [optional] The previous throwable used for the exception chaining.
	 */
	public function __construct( $url, $message = '', \Throwable $previous = null ) {
		$this->url = $url;
		parent::__construct($message, $previous);
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

}
