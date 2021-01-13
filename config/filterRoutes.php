<?php
return array(

'top' => 'SELECT * FROM `product` ORDER BY `price` ASC',
 
'low' => 'SELECT * FROM `product` ORDER BY `price` DESC',
 
'new' => 'SELECT * FROM `product` ORDER BY `date` ASC',
 
'old' => 'SELECT * FROM `product` ORDER BY `date` DESC',

'' => 'SELECT * FROM `product` ORDER BY `date` ASC'

);

?>