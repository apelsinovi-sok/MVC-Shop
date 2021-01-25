<?php

return array (

'product/([a-z]+)/([0-9]+)' => 'product/viewproduct/$1/$2',

'product/([a-z]+)' => 'product/viewcategory/$1',

'product' => 'index/index',

'registration' => 'identification/registration',

'authorization'=>'identification/authorization',

'boot'=>'identification/boot',

'' => 'index/index/$1'


 );

?>
