<?php

class MainCategories {//вывод списка категорий 

static function getCategories(){

	 return  R::getAll('SELECT * FROM `category` ORDER BY `number`');

}
}

?>