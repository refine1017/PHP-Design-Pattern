<?php

namespace PDP\AbstractFactory;

/**
 * 实体产品：iPad
 */
class iPad implements Pad {
	public function name() {
		return "iPad";
	}
}