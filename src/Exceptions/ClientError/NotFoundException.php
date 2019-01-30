<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class NotFoundException extends AbstractClientErrorException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::NotFound;
	}

}
