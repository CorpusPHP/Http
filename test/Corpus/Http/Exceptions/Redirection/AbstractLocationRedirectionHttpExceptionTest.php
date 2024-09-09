<?php

namespace Corpus\Http\Exceptions\Redirection;

use PHPUnit\Framework\TestCase;

class AbstractLocationRedirectionHttpExceptionTest extends TestCase {

	public function testGetHttpStatusCode() : void {
		$e = new class ('http://www.example.com', 'found it') extends AbstractLocationRedirectionHttpException {

			public function getHttpStatusCode() : int {
				return 302;
			}
		};
		$this->assertSame(302, $e->getHttpStatusCode());
		$this->assertSame('http://www.example.com', $e->getLocation());
		$this->assertSame('found it', $e->getMessage());
	}

}
