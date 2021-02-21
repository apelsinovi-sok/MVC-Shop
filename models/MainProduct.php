<?php
class MainProduct{

	const FILTER = 'ORDER BY `id` DESC';

	public static function getProducts($value , $filter){//вывод всего товара на главной странице 


	   if(!isset($filter)){
          $filter = self::FILTER;

	   } else {

	   	  require_once('GetRequest.php');
	       $filter = GetRequest::Request($filter);

	   }  

          return $products = R::getAll('SELECT * FROM `product`'.$filter.'');

}



	public static function getProduct($number = '') {//отображение страницы конкретного товара 

	  return $product = R::findOne('product', 'category = :category AND id = :id', [':category' => $number['0'], ':id' => $number['1']]);// 0=>категория 1=>индекс

	  

     }

}

?>
