<?php

namespace Onoi\CallbackContainer\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Onoi\CallbackContainer\Exception\ServiceTypeMismatchException;

/**
 * @covers \Onoi\CallbackContainer\Exception\ServiceTypeMismatchException
 * @group onoi-callback-container
 *
 * @license GNU GPL v2+
 * @since 2.0
 *
 * @author mwjames
 */
class ServiceTypeMismatchExceptionTest extends TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\Onoi\CallbackContainer\Exception\ServiceTypeMismatchException',
			new ServiceTypeMismatchException( 'Foo', 'Bar', 'Foobar' )
		);

		$this->assertInstanceOf(
			'\RuntimeException',
			new ServiceTypeMismatchException( 'Foo', 'Bar', 'Foobar' )
		);
	}

}
