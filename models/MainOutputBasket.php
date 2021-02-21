<?php
class MainOutputBasket{//получение полей товара по id 

public static function getProduct($id){
  $basket = R::findOne('product', 'id = ?', [$id]);
  return $basket;

}
}

?>