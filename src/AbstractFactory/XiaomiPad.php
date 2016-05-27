<?php

namespace PDP\AbstractFactory;

/**
 * 实体产品：小米Pad
 */
class XiaomiPad implements Pad {
	public function name() {
		return "XiaomiPad";
	}
}