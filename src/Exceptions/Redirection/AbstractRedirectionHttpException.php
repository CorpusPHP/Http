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
	 * @param string $url
	 * @param string $message
	 */
	public function __construct( $url, $message = "", \Exception $previous = null ) {
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
