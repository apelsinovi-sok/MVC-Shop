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
<style type="text/css">
	body {
  background-color:  #eee;
}
.title {

    margin-bottom: 50px;
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;

}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}


.btn {
  margin-top: auto;
}

img{
	height: 300px;
	width: 450px;
}
</style>
<? foreach ($products as $product) : ?>
 <? endforeach; ?>
<section>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container py-3">
  <div class="title h1 text-center">Horizontal cards - Bootstrap 4</div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7  px-3">
        <div class="card-block px-6">
          <h4 class="card-title"><?=$product['name'] ?></h4>
          <p class="card-text">
            The Carousel code can be replaced with an img src, no problem. The added CSS brings shadow to the card and some adjustments to the prev/next buttons and the indicators is rounded now. As in Bootstrap 3
          </p>
          <p class="card-text">Made for usage, commonly searched for. Fork, like and use it. Just move the carousel div above the col containing the text for left alignment of images</p>
          <br>
          <?='<div class="btn btn-warning basket" id="'.$product['id'].'">
            В корзину
          </div>'?>


        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <?='<img class="d-block" src="/img/'.$product['picture'].'" alt="">'?>

            </div>
            <div class="carousel-item">
              <?='<img class="d-block" src="/img/'.$product['picture'].'" alt="">'?>
            </div>
            <div class="carousel-item">
              <?='<img class="d-block" src="/img/'.$product['picture'].'" alt="">'?>
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


 <br>
<br>
<br>
<div class="footer">

</div>
</section>




<!-- <section>
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
</section> -->







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
