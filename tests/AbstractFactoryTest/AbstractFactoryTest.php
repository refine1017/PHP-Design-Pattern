<?php

namespace PDPTest\AbstractFactoryTest;

use PDP\AbstractFactory\HardwareVendor;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase {
	public function testVendor() {
		$apple = HardwareVendor::GetVendor("Apple");
		$this->assertEquals("iPhone", $apple->createPhone()->name());
		$this->assertEquals("iPad", $apple->createPad()->name());

		$xiaomi = HardwareVendor::GetVendor("Xiaomi");
		$this->assertEquals("Xiaomi5", $xiaomi->createPhone()->name());
		$this->assertEquals("XiaomiPad", $xiaomi->createPad()->name());
	}
}