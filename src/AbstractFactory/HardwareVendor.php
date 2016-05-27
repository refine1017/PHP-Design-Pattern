<?php

namespace PDP\AbstractFactory;

/**
 * 抽象工厂：硬件厂商
 */
abstract class HardwareVendor {

	/**
	 * 获取具体硬件厂商
	 *
	 * @param $name 名称
	 * @return HardwareVendor
	 */
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

	/**
	 * 生产手机接口
	 */
	public abstract function createPhone();

	/**
	 * 生产平板接口
	 */
	public abstract function createPad();
}