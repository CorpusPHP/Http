<?php

namespace Corpus\Http\Exceptions\Success;

use Corpus\Http\Status;

class NoContentException extends AbstractSuccessException {

	/** @inheritdoc */
	public function getHttpStatusCode() : int {
		return Status::NoContent;
	}

}
