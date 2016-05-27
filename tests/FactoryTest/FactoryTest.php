<?php
namespace PDOTest\FactoryTest;

use PDP\Factory\AppleFactory;

class FactoryTest extends \PHPUnit_Framework_TestCase {
	public function testOrder() {
		$factory = new AppleFactory();

		$hardware = $factory->create("iPhone");
		$this->assertEquals("iPhone", $hardware->name());

		$hardware = $factory->create("iPad");
		$this->assertEquals("iPad", $hardware->name());
	}
}