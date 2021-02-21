<?php
class MainProductByCategory {//вывод товара по категории 
	static function getProductByCategory($number, $filter){
		require_once ('models/GetRequest.php');
	
			$filter = GetRequest::Request($filter);// поиск sql запроса по значению параметра сортировки
        

		return $products = R::getAll('SELECT * FROM `product` WHERE `category` = ? '.$filter.'', [$category = $number]);// filter = sql запросу сортировки. если filter пуст, то запрос выаолняется без параметров сортирови
	}
}

?>

