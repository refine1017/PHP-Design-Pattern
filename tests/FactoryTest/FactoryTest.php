<?php
namespace PDOTest\FactoryTest;

use PDP\Factory\ElemeFactory;

class FactoryTest extends \PHPUnit_Framework_TestCase {
	public function testOrder() {
		$factory = new ElemeFactory();

		$seller = $factory->order("KFC");
		$this->assertEquals("KFC", $seller->name());

		$seller = $factory->order("Mcdonald");
		$this->assertEquals("Mcdonald", $seller->name());
	}
}