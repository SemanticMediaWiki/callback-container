<?php

namespace Onoi\CallbackContainer\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Onoi\CallbackContainer\Exception\ServiceCircularReferenceException;

/**
 * @covers \Onoi\CallbackContainer\Exception\ServiceCircularReferenceException
 * @group onoi-callback-container
 *
 * @license GNU GPL v2+
 * @since 2.0
 *
 * @author mwjames
 */
class ServiceCircularReferenceExceptionTest extends TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\Onoi\CallbackContainer\Exception\ServiceCircularReferenceException',
			new ServiceCircularReferenceException( 'foo' )
		);

		$this->assertInstanceOf(
			'\RuntimeException',
			new ServiceCircularReferenceException( 'foo' )
		);
	}

}
