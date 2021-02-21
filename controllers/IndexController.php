<?php
class IndexController{

	public function actionindex ($value , $filter){
	   require_once ('models/MainProduct.php');
	   require_once ('models/MainCategories.php');
	   $products = array();
	   $categories = array();
	   $products = MainProduct::getProducts($value , $filter);//выврод всего товара на главной
	   $categories = MainCategories::getCategories();//вывод списка категорий 
	   require_once ('views/index.php');
	}
}

?>
