<?php

namespace Corpus\Http\Exceptions\ClientError;

use Corpus\Http\Status;

class NotFoundException extends AbstractClientErrorException {

	public function getHttpStatusCode() : int {
		return Status::NotFound;
	}

}
