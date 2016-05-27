<?php

namespace PDP\AbstractFactory;

/**
 * 抽象工厂：硬件厂商
 */
abstract class HardwareVendor {
	public static function GetVendor($name) {
		switch ($name) {
			case 'Apple':
				return new AppleVendor();
				break;
			case "Xiaomi":
				return new XiaomiVendor();
				break;
			default:
				throw new Exception("Vendor not exists！", 1);
				break;
		}
	}

	public abstract function createPhone();

	public abstract function createPad();
}