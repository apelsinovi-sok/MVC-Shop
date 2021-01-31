<?php
class MainOutputBasket{

public static function getProduct($id){
$min_price = '199$';
$basket = R::findOne('product', 'id = ?', [$id]);
return $basket;
}
}

?>