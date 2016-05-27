<?php

namespace PDP\Factory;

/**
 * 实体产品：苹果平板
 */
class iPad implements Hardware {
	public function name() {
		return "iPad";
	}
}