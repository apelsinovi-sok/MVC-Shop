<?php
class ProductController{

	public function actionviewproduct($number = '') {//вывод страницы конкретного продукта 

	   require_once ('models/MainProduct.php');
	   require_once ('models/MainCategories.php');
	   $categories = array();
	   $product = MainProduct::getProduct($number);
	   if($product){

	   require_once ('views/product.php');
	    } else
			echo "<script>
					 alert('Такого товара нет в наличии');
					</script>";
	   }


	public function actionviewcategory($number, $filter) {//вывод товара по категориям 
		require_once ('models/MainCategories.php');
		require_once ('models/MainProductByCategory.php');
		$categories = array();
	    $categories = MainCategories::getCategories();
		$products = MainProductByCategory::getProductByCategory($number['0'], $filter);
		require_once ('views/index.php');
	}


	public function actionaddbasket($value){// добавление товара в корзину 
	if(isset($_SESSION['user'])){// если пользователь авторизирован
      $user = R::findOne('user', 'email = ?', [$_SESSION['user']]);
      $_SESSION['basket'] = json_decode($user->basket, true);// получить массив корзины пользователя 

   /*   Массив имеет следующий вид : индекс товара => колличество данного товара*/

	  $basket = array();

	  if (isset($_SESSION['basket'])) {

	  	 $basket = $_SESSION['basket'];
	  }
	  $key = $value[0];//id товара 

	  if (array_key_exists($key, $basket)) {//поиск товара в массиве по id 
	  	$basket[$key]++;//если товар с данным id есть, увеличить его колличесвто на один
	    }else {
	    	$basket[$key] = 1;//иначе создать новый id с колличесвтом равным одному
	    }

	   foreach ($basket as $key => $value) {//колличество товара в корзине
	   	$value1 = $value1 + $value;
	   }

       $basketSave = R::load('user', $user->id);//сохранение json массива в строке пользователя
       $basketSave->basket = json_encode($basket);
       R::store($basketSave);

	   $_SESSION['basket'] = $basket;
	   $_SESSION['sum'] = $value1;
	   echo $_SESSION['sum'];
	}
   }

	public function actiondeletebasket(){//удаления корзины из бд и сессий 
	   unset($_SESSION['basket']);
       unset($_SESSION['sum']);
       $delete = R::load('user', $_SESSION['user_id']);
       $delete->basket = '';
       R::store($delete);

	}
}

?>
