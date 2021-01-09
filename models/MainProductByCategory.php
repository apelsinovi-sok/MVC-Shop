<?php
class MainProductByCategory {
	static function getProductByCategory($number){
		return $products = R::getAll('SELECT * FROM `product` WHERE `category` = ?', [$category = $number]);
	}
}

?>

