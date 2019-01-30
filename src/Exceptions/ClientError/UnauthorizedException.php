<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class UnauthorizedException extends AbstractClientErrorException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::Unauthorized;
	}

}
