 <?php 
 require_once (ROOT.'/views/header.php');
 ?>
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

<div class="father">
	
	<div class="category">
	<? foreach ($categories as $category) : ?>
	   <div><? echo '<a href="/product/'.$category['nameurl'].'">'.$category['name'].'</a>'?></div>
    <? endforeach; ?>
    </div>

<div class="productView">
 <? foreach ($products as $product) : ?>
 <? endforeach; ?>
<div class="image"> <div> <? echo '<img src="/img/'.$product['picture'].'">';?> </div> </div>

<div class="parameters"> 

	<div class="name"><? echo $product['name']; ?></div>
	<div class="content_big "> <? echo $product['content_big'].'.'; ?></div>
	<div class="price"><? echo 'Цена:'.$product['price']; ?></div>

</div>

</div>
</div>
</body>
<? require_once(ROOT.'/views/footer.php'); ?>
</html>

