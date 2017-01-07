<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Status;

class SeeOtherException extends AbstractRedirectionHttpException {

	public function getHttpStatusCode() : int {
		return Status::SeeOther;
	}

}
