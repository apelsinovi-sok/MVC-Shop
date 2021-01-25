
</html>
<link rel="stylesheet" href="/css/header.css" type="text/css"/>
 <body>

 <div class = 'header'>
 	<div class="home">
    	<div><a href="/">Домой</a></div>
    </div>
    <div class="account">
    	<? if(!$_SESSION['user']) echo '<div><a href="/registration">Регистрация</a></div>';?>
    	<? if(!$_SESSION['user']) echo '<div><a href="/authorization">Авторизация</a></div>';?>
    	<? if($_SESSION['user']) echo '<div><a href="/exit">Выход</a></div>';?>  	
    </div>      
 </div>
</html>

