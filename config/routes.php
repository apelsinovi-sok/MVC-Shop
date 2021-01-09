<?php

return array (

'product/([a-z]+)/([0-9]+)' => 'product/viewproduct/$1/$2',

'product/([a-z]+)' => 'product/viewcategory/$1',

'product' => 'index/index',

'' => 'index/index'


 );

?>
