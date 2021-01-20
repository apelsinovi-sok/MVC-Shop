<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Регистрация</title>
<style>
</style>
</head>
<body>
<link rel="stylesheet" href="/css/body.css" type="text/css"/>

<? require_once (ROOT.'/views/header.php'); ?>

<form name = "test" action="" method="post" >

  <strong>Введите почту</strong>
  <br><input type="email" name="email" value="<? echo $_POST['email']; ?>"  ></br>
  <strong>Введите ваше имя</strong>
  <br><input type="text" name="name"  value="<? echo $_POST['name']; ?>"  ></br>
  <strong>Введите вашу фамимлию</strong>
  <br><input type="text" name="lastname" value="<? echo $_POST['lastname']; ?>"></br>
  <strong>Введите пароль</strong>
  <br><input type="password" name="password"></br>
  <strong>Повторите пароль</strong>
  <br><input type="password" name="password2"></br>
  <br><input type = "submit" name = "registration" value = "Зарегестрироваться"/></br>

</form>


 

<!-- <? require_once(ROOT.'/views/footer.php'); ?> -->

</body>
</html>