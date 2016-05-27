<?php

namespace PDP\Factory;

/**
 * 实体产品：苹果手机
 */
class iPhone implements Hardware {
	public function name() {
		return "iPhone";
	}
}