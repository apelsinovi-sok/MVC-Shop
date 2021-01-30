<?php
class MainBasket{
   public static function fillBasket($value){
   	$key = $value['0'];
		$basket = array();
		$basket = $_SESSION['basket'];
		if (array_key_exists($key, $basket)) {
			$basket[$key]++;
		}else{
			$basket[$key] = 1;
		}
        
		$_SESSION['basket'] = $basket;
		/*var_dump($_SESSION['basket']);*/
		/*unset($_SESSION['basket']);
		unset($_SESSION['sum']);*/
		return self::basketStatus($basket);
		


       
   }

   public static function basketStatus($basket){
   	foreach ($basket as $key => $value) {
   		$sum +=$value;
   		return $sum;
   	 }
   }
}

?>