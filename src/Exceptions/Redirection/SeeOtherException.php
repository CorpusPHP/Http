<?php

namespace Corpus\Http\Exceptions\Redirection;

use Corpus\Http\Status;

class SeeOtherException extends AbstractLocationRedirectionHttpException {

	public function getHttpStatusCode() : int {
		return Status::SeeOther;
	}

}
