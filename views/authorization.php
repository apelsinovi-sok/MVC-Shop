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

<form name = "authorization" action="" method="post" >

  <strong>Введите почту</strong>
  <br><input type="email" name="email" value="<? echo $_POST['email']; ?>"  ></br>
  <strong>Введите пароль</strong>
  <br><input type="password" name="password" value="<? echo $_POST['password']; ?>" ></br>
  <br><input type = "submit" name = "authorization" value = "Авторизироваться"/></br>

</form>
 

<!-- <? require_once(ROOT.'/views/footer.php'); ?> -->

</body>
</html>