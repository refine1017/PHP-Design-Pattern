<?php

namespace PDP\Factory;

// ELeme工厂
class ElemeFactory {

	// 定外卖
	public function order($seller_name) {
		switch ($seller_name) {
			case 'KFC':
				return new KFCSeller();
				break;
			case "Mcdonald":
				return new McdonaldSeller();
			default:
				throw new Exception("seller not exists!");
		}
	} 
}