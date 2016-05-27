<?php

namespace PDP\Factory;

/**
 * 工厂类：苹果工厂
 */
class AppleFactory {

	/**
	 * 制造硬件设备
	 *
	 * @param $name 名称
	 * @return Hardware
	 */
	public function create($name) {
		switch ($name) {
			case 'iPhone':
				return new iPhone();
				break;
			case "iPad":
				return new iPad();
			default:
				throw new Exception("cannot create that!");
		}
	} 
}