
<!-- 
<?php
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
<title>Главная</title>


<? require_once(ROOT.'/views/header.php');
   require_once(ROOT.'/views/filter.php'); ?>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="/css/body.css">
<body> 
<section>
  <div class="container">
  <div class="row">
   <div class="col-xl-2 col-lg-12">
    <div class="row">
      <div class="col-12 pe-5">
        <ul class="list-group">
  <? foreach ($categories as $category) : ?>
  <li class=<? if($number['0'] == $category['name_url']) echo "list-group-item active"; if($number['0'] != $category['name_url']) echo "list-group-item" ;?>><? echo '<a href="/product/'.$category['name_url'].'" >'.$category['name'].'</a>'?></li>
  <? endforeach; ?>
</ul>
      </div>
   </div>
    </div>

    <div class="col-xl-9 col-lg-12">
      <div class="row">
       <? foreach ($products as $product) : ?>
        <div class="col-xl-4 col-lg-4 col-md-6">
      <div class="card" style="width: 19rem;">
   <!-- <img src="/img/Wilson.jpg" class="card-img-top" alt="...">  -->
  <? echo '<img src="/img/'.$product['picture'].'" class="card-img-top" alt="...">'?>
  <div class="card-body">
    <h5 class="card-title"><? echo $product['name'] .' - '. $product['price'];?></h5>
    <p class="card-text"><? echo $product['content_big'] ?></p>
    <? echo '<a href="/product/'.$product['category'].'/'.$product['id'].'" class="btn btn-primary">Купить</a>'?>
  </div>
</div>
    </div>
     <? endforeach; ?>
      </div>
      </div>
    </div>

</div>
</div>
</section>


<!--  <div class="father">
	<div class="category">
	<? foreach ($categories as $category) : ?>
	   <div class= <? if($number['0'] == $category['name_url']) echo "light";?>><? echo '<a href="/product/'.$category['name_url'].'" >'.$category['name'].'</a>'?></div>
    <? endforeach; ?> 
  </div>

<div class="products">
   <? foreach ($products as $product) : ?>
   	    <div class="product"> <? echo '<img src="/img/'.$product['picture'].'">'?> <div class="product-name"><? echo $product['name'];?>
        </div><div class="buy"> <? echo '<a href="/product/'.$product['category'].'/'.$product['id'].'">Купить</a>'?></div></div>
   <? endforeach; ?>

</div>
</div> -->

</body>
</section>
 <? require_once(ROOT.'/views/footer.php'); ?> 
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


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

