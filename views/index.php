<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Главная</title>
</head>
<? require_once(ROOT.'/views/header.php');
   require_once(ROOT.'/views/filter.php'); ?>
<!-- <?$r = $_GET['sort']; echo $r;?>
<? if (isset($_GET['sort'])) :?>
<? $e = '?sort='.$r ?>
<?endif;?>
<?$b = '&mort=222' ?>
<?='<a href="/'.$e.''.$b.'">1</a>'?> -->

<link rel="stylesheet" type="text/css" href="/css/body.css">
<body style="margin-top: 55px;">
<section>
  <div class="container">
  <div class="row">
   <div class="col-xl-2 col-lg-12">
    <div class="row">
      <div class="col-12 pe-5">
        <ul class="list-group" >
  <? foreach ($categories as $category) : ?>
  <li class="list-group-item <? if($category['name_url']==$number[0]) echo 'list-group-item-warning'?>" ><? echo '<a href="/product/'.$category['name_url'].'" style="color: grey; text-decoration: none;">'.$category['name'].'</a>'?></li>
  <? endforeach; ?>

</ul>
      </div>
   </div>
    </div>

    <div class="col-xl-9 col-lg-12">
      <div class="row">
       <? foreach ($products as $product) : ?>
        <div class="col-xl-4 col-lg-4 col-md-6">
      <div class="card" style="width: 20rem;">
   <!-- <img src="/img/Wilson.jpg" class="card-img-top" alt="...">  -->
  <?= '<img src="/img/'.$product['picture'].'" class="card-img-top" alt="...">'?>
  <div class="card-body">
    <h5 class="card-title"><?= $product['name'] .' - '. $product['price'].'$';?></h5>
    <p class="card-text"><?= $product['content_small'] ?></p>
    <?= '<a href="/product/'.$product['category'].'/'.$product['id'].'" class="btn btn-warning ">Купить</a>'?>

<?='<div class="btn btn-warning basket" id="'.$product['id'].'">

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>

</div>'?>

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

</body>
</section>
 <? require_once(ROOT.'/views/footer.php'); ?>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
