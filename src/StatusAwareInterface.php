<?php

namespace Corpus\Http;

interface StatusAwareInterface {

	/**
	 * Get the HTTP Status Code the Exception Represents
	 */
	public function getHttpStatusCode() : int;

}
