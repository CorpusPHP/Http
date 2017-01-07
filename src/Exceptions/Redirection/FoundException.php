<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Status;

class FoundException extends AbstractRedirectionHttpException {

	public function getHttpStatusCode() : int {
		return Status::Found;
	}

}
