 <?php

return array(

'top' => 'SELECT * FROM `product`  ORDER BY `price` ASC',

'low' => 'SELECT * FROM `product` ORDER BY `price` DESC',

'new' => 'SELECT * FROM `product` ORDER BY `date` DESC',

'old' => 'SELECT * FROM `product` ORDER BY `date` ASC',

'' => 'SELECT * FROM `product`  ORDER BY `date` ASC '

);

?>
