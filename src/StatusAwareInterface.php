<?php

namespace Corpus\Http;

interface StatusAwareInterface {

	/**
	 * Get the HTTP Status Code the Exception Represents
	 *
	 * @return int
	 */
	public function getHttpStatusCode() : int;

}
