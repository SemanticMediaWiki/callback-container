<?php

namespace Onoi\CallbackContainer\Tests;

use PHPUnit\Framework\TestCase;
use Onoi\CallbackContainer\NullContainerBuilder;

/**
 * @covers \Onoi\CallbackContainer\NullContainerBuilder
 * @group onoi-callback-container
 *
 * @license GNU GPL v2+
 * @since 1.0
 *
 * @author mwjames
 */
class NullContainerBuilderTest extends TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\Onoi\CallbackContainer\NullContainerBuilder',
			new NullContainerBuilder()
		);
	}

	public function testInterfaceMethods() {

		$instance = new NullContainerBuilder();

		$this->assertNull(
			$instance->create( 'Foo' )
		);

		$this->assertNull(
			$instance->singleton( 'Foo' )
		);

		$this->assertNull(
			$instance->registerExpectedReturnType( 'Foo', 'bar' )
		);

		$this->assertNull(
			$instance->registerAlias( 'Foo', 'bar' )
		);

		$this->assertNull(
			$instance->registerObject( 'Foo', 'bar' )
		);

		$this->assertNull(
			$instance->registerCallback( 'Foo', function() {} )
		);

		$this->assertNull(
			$instance->registerFromFile( 'File' )
		);

		$callbackContainer = $this->getMockBuilder( '\Onoi\CallbackContainer\CallbackContainer' )
			->disableOriginalConstructor()
			->getMock();

		$this->assertNull(
			$instance->registerCallbackContainer( $callbackContainer )
		);
	}

}
