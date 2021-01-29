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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="/css/body.css" type="text/css"/> -->

<style type="text/css">
img{
	max-height: 350px;
	min-height: 350px;
}
</style>

<section>
	<div class="container my-4">
	<div class="row">
		<div class="col-lg-2 col-md-2 bg-danger">
			
	    </div>
         <div class="col-lg-5 col-md-6"> 
          <img src="/img/Wilson.jpg" class="col-lg-12 col-md-12" >
         </div>
			
	    
	    <div class=" col-lg-4 col-md-4 bg-info">
			<div>4</div>
	    </div>
		</div>
    </div>
</section>


<!-- <div class="father">
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
</div> -->

</body>
<!-- <? require_once(ROOT.'/views/footer.php'); ?> -->
</html>

