<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Профиль</title>
</head>
<? require_once (ROOT.'/views/header.php'); ?>
<body style="margin-top: 55px;">

<div class="container col-4">
	<div class="row">
		<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Товар</th>
      <th scope="col">Цена</th>
      <th scope="col">Колличество</th>
    </tr>
  </thead>
  <tbody>

<?
$i = '1';
$sum = '0';
$basketArr = array();
if (isset($_SESSION['basket'])) {
  $basketArr = $_SESSION['basket'];
}

?>

<? foreach (array_keys($basketArr) as $key) :?>
<? $basket = MainOutputBasket::getProduct($key);
   $quantity = $_SESSION['basket'][$key]; ?> 
    <tr class="pop">
      <th scope="row"><?= $i ?></th>
      <td><?= $basket->name ?></td>
      <td><?= $basket->price.'$' ?></td>
      <td><?= $quantity ?></td>
    </tr>
<?$i++; $sum = $sum+$basket->price*$quantity; ?>
<? endforeach; ?>
<tr>
<td>Итого</td>
<td>Цена:</td>
<td></td>
<td class="price"><?=$sum.'$'?></td>	
</tr>
  </tbody>
</table>
	</div>
<button type="submit" name = "authorization" class="btn btn-warning delete">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button>  
</div>

</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            $.ajax({
                method: 'POST',
                url: '/basket/delete',
                data: {}
            })
                .done(function(data){
                $('.pop').html('');
                $('.price').html('0$');
                $('#basket').html('Корзина: 0');
                });
           });
      });
</script> 