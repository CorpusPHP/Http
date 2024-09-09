<?php


use Corpus\Http\Exceptions\AbstractHttpException;
use Corpus\Http\Status;
use PHPUnit\Framework\TestCase;

class ExceptionNamingTest extends TestCase {

	public function testNaming() : void {
		$dir   = new \RecursiveDirectoryIterator(__DIR__ . '/../src/Exceptions');
		$ite   = new \RecursiveIteratorIterator($dir);
		$files = new \RegexIterator($ite, "/Exception\\.php$/");
		foreach( $files as $file ) {
			require_once $file;
		}

		$classes = array_filter(get_declared_classes(), function ($class) {
			return is_subclass_of($class, AbstractHttpException::class);
		});

		foreach($classes as $className) {
			$reflect = new \ReflectionClass($className);
			if($reflect->isAbstract()) {
				continue;
			}

			$inst = $this->getMockBuilder($className)
				->onlyMethods([])
				->disableOriginalConstructor()
				->getMock();

			assert($inst instanceof AbstractHttpException);

			$shortName = $reflect->getShortName();
			$constName = preg_replace('/Exception$/', '', $shortName);

			$this->assertSame(
				constant(Status::class . '::' . $constName),
				$inst->getHttpStatusCode()
			);
		}
	}

}
