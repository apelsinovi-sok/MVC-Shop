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

	  $basket = array();
	  if (isset($_SESSION['basket'])) {
	  	 $basket = $_SESSION['basket'];
	  }
	  $key = $value[0];

	  if (array_key_exists($key, $basket)) {
	  	$basket[$key]++;
	    }else {
	    	$basket[$key] = 1;
	    }
	   
	  
	   foreach ($basket as $key => $value) {
	   	$value1 = $value1 + $value;
	   }
	   $_SESSION['basket'] = $basket;
	   $_SESSION['sum'] = $value1;
	   /*unset($_SESSION['basket']);
	   unset($_SESSION['sum']);*/
	   echo $_SESSION['sum'];
	}
}

?>