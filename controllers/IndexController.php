<?php
class IndexController{

	public function actionindex (){
	   require_once ('models/MainProduct.php');
	   require_once ('models/MainCategories.php');
	   $products = array();
	   $categories = array();
	   $products = MainProduct::getProducts();
	   $categories = MainCategories::getCategories();
	   require_once ('views/index.php');
	}
}

?>