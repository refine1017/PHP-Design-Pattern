<?php

namespace PDP\AbstractFactory;

/**
 * 实体产品：Iphone
 */
class iPhone implements Phone {
	public function name() {
		return "iPhone";
	}
}