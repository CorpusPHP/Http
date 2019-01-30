<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Status;

class FoundException extends AbstractLocationRedirectionHttpException {

	public function getHttpStatusCode() : int {
		return Status::Found;
	}

}
