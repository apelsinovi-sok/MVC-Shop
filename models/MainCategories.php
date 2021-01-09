<?php

class MainCategories {

static function getCategories(){

	 return  R::getAll('SELECT * FROM `category` ORDER BY `number`');

}
}

?>