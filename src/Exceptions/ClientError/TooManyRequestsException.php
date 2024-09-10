<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class TooManyRequestsException extends AbstractClientErrorException {

	public function getHttpStatusCode() : int {
		return Status::TooManyRequests;
	}

}
