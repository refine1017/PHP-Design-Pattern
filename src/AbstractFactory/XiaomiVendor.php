<?php

namespace PDP\AbstractFactory;

/**
 * 实体工厂：小米
 */
class XiaomiVendor extends HardwareVendor {
	public function createPhone() {
		return new Xiaomi5();
	}

	public function createPad() {
		return new XiaomiPad();
	}
}