<?php
class MainProduct{

	const FILTER = 'SELECT * FROM `product` ORDER BY `id` DESC';

	public static function getProducts($value , $filter){ 
	   
	   if(!$filter){
          $filter = self::FILTER;
	   } else {
	   	  require_once('GetRequest.php');
	       $filter = GetRequest::Request($filter);
	      
	   }
           
       return $products = R::getAll($filter); 

	   }

	public static function getProduct($number = '') {
	  return $products = R::getAll('SELECT * FROM `product` WHERE `category` = ? AND `id` = ? LIMIT 1 ', [$number['0'], $number['1'] ] );

     }

}

?>