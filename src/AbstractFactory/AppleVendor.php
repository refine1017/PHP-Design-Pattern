<?php

namespace PDP\AbstractFactory;

/**
 * 实体工厂：苹果
 */
class AppleVendor extends HardwareVendor {
	public function createPhone() {
		return new iPhone();
	}

	public function createPad() {
		return new iPad();
	}
}