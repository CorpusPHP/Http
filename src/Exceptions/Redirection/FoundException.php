<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Status;

class FoundException extends AbstractLocationRedirectionHttpException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::Found;
	}

}
