<?php

namespace Corpus\Http;

use PHPUnit\Framework\TestCase;

class StatusTest extends TestCase {

	public function test_statusText() : void {
		$reflect = new \ReflectionClass(Status::class);

		$constants = $reflect->getConstants();
		foreach( $constants as $constant => $value ) {
			$this->assertIsString(Status::statusText($value));
		}

		$this->assertNull(Status::statusText(1000));
	}

}
