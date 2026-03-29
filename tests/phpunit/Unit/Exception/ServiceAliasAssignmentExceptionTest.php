<?php

namespace Onoi\CallbackContainer\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Onoi\CallbackContainer\Exception\ServiceAliasAssignmentException;

/**
 * @covers \Onoi\CallbackContainer\Exception\ServiceAliasAssignmentException
 * @group onoi-callback-container
 *
 * @license GNU GPL v2+
 * @since 2.0
 *
 * @author mwjames
 */
class ServiceAliasAssignmentExceptionTest extends TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\Onoi\CallbackContainer\Exception\ServiceAliasAssignmentException',
			new ServiceAliasAssignmentException( 'foo' )
		);

		$this->assertInstanceOf(
			'\RuntimeException',
			new ServiceAliasAssignmentException( 'foo' )
		);
	}

}
