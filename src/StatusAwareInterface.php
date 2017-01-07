<?php

namespace Corpus\Http;

interface StatusAwareInterface {

	public function getHttpStatusCode() : int;

}
