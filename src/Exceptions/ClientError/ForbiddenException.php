<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class ForbiddenException extends AbstractClientErrorException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::Forbidden;
	}

}
