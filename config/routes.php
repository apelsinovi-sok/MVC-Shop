<?php

return array (

'product/([a-z]+)/([0-9]+)' => 'product/viewproduct/$1/$2',

'product/([a-z]+)' => 'product/viewcategory/$1',

'basket/([0-9]+)'=>'product/addbasket/$1',

'basket/delete'=>'product/deletebasket',

'product' => 'index/index',

'registration' => 'identification/registration',

'authorization'=>'identification/authorization',

'exit'=>'identification/exit',

'basket'=>'identification/basket',

'boot'=>'identification/boot',

'' => 'index/index/$1'


 );

?>
