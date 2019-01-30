<?php

namespace Corpus\Http\Exceptions\ServerError;

use Corpus\Http\Status;

class InternalServerErrorException extends AbstractServerErrorException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::InternalServerError;
	}

}
