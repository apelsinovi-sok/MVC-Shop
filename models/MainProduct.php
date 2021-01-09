<?php
class MainProduct{

	public static function getProducts()
	 {
       return $products = R::getAll('SELECT * FROM `product`  ');
       /*echo var_dump($products);*/
	}

	public static function getProduct($number = ''){
	  return $products = R::getAll('SELECT * FROM `product` WHERE `category` = ? AND `id` = ? LIMIT 1 ', [$number['0'], $number['1'] ] );
	   

}
}
?>