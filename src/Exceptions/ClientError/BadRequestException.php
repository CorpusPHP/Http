<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class BadRequestException extends AbstractClientErrorException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::BadRequest;
	}

}
