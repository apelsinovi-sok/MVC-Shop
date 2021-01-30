<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Регистрация</title>
<style>
</style>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/body.css" type="text/css"/>

<? if($_SESSION['user']) 
  header('Location: /');?>
<? require_once (ROOT.'/views/header.php'); ?>

<div class="container col-3 mt-4">
  <form name = "test" action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите почту</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<? echo $_POST['email']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name = "registration" class="btn btn-primary">Зарегестрироваться</button>
</form>
</div>




<!-- <? require_once(ROOT.'/views/footer.php'); ?> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>