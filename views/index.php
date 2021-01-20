

<!-- <?php
if(isset($_POST['A'])){
$category = R::dispense('category');
$category->name = 'Оружие';
$category->nameUrl ='weapon';
$category->status = '1';
$category->number = '5';
R::store($category);
}
?> 
 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Товары</title>
<style>
</style>
</head>
<body>
<link rel="stylesheet" href="/css/body.css" type="text/css"/>

 <?php 
 require_once (ROOT.'/views/header.php');
 require_once (ROOT.'/views/filter.php');
 ?>

<div class="father">

	<div class="category">
	<? foreach ($categories as $category) : ?>
	   <div><? echo '<a href="/product/'.$category['nameurl'].'">'.$category['name'].'</a>'?></div>
    <? endforeach; ?>
  </div>

<div class="products">
   <? foreach ($products as $product) : ?>
   	    <div class="product"> <? echo '<img src="/img/'.$product['picture'].'">'?> <div class="product-name"><? echo $product['name'];?>
        </div><div class="buy"> <? echo '<a href="/product/'.$product['category'].'/'.$product['id'].'">Купить</a>'?></div></div>
   <? endforeach; ?>
</div>
</div>
<? for ($i=1; $i <=4 ; $i++) : ?>
<? echo '<a href="&='.$i.'">'.$i.'</a>' ; ?>
<? endfor; ?>
</body>
<? require_once(ROOT.'/views/footer.php'); ?>
</html>


<!-- <form name = "test" action="" method="post" >
<br>
  <input type = "submit" name = "A" value = "Отправить"/>
</br>
</form>
 -->


<!-- 	<div class="product"><img src="/img/8.jpg"><div class="product-name">Товар 1</div><div class="buy">Купить</div></div>
	<div class="product"><img src="/img/8.jpg"><div class="product-name">Товар 1</div><div class="buy">Купить</div></div>
	<div class="product"><img src="/img/8.jpg"><div class="product-name">Товар 1</div><div class="buy">Купить</div></div>
	<div class="product"><img src="/img/8.jpg"><div class="product-name">Товар 1</div><div class="buy">Купить</div></div> -->
<a href="">й</a>
