<?php

namespace Corpus\Http\Exceptions\Success;

use Corpus\Http\Status;

class NoContentException extends AbstractSuccessException {

	public function getHttpStatusCode() : int {
		return Status::NoContent;
	}

}
