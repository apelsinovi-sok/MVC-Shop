<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Профиль</title>
</head>
<body>
<? require_once (ROOT.'/views/header.php'); ?>
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
<?$i = 1; $sum = 0; ?>
<? foreach (array_keys($_SESSION['basket']) as $key) :?>
<? $basket = MainOutputBasket::getProduct($key);
   $quantity = $_SESSION['basket'][$key]; ?> 
    <tr>
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
<td><?=$sum.'$'?></td>	
</tr>
  </tbody>
</table>
	</div>
</div>
</body>
</html>