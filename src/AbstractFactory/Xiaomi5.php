<?php

namespace PDP\AbstractFactory;

/**
 * 实体产品：小米5
 */
class Xiaomi5 implements Phone {
	public function name() {
		return "Xiaomi5";
	}
}