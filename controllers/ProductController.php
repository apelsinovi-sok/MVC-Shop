<?php
class ProductController{

	public function actionviewproduct($number = '') {

	   require_once ('models/MainProduct.php');
	   require_once ('models/MainCategories.php');
	   $categories = array();
	   $categories = MainCategories::getCategories();
	   $products = MainProduct::getProduct($number);
	   if($products){
	   require_once ('views/product.php');
	   
	    } else 
	        echo 'Такого товара нет в наличии';     
	}


	public function actionviewcategory($number) {
		require_once ('models/MainCategories.php');
		require_once ('models/MainProductByCategory.php');
		$categories = array();
	    $categories = MainCategories::getCategories();
		$products = MainProductByCategory::getProductByCategory($number['0']);
		require_once ('views/index.php');
	}


	public function actionaddbasket($value){
	  require_once ('models/MainBasket.php');
	  $_SESSION['sum'] = MainBasket::fillBasket($value);
	  echo $_SESSION['sum'];
	}
}

?>