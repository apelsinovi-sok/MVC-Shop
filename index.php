<?php
ob_start();
session_start();
define('ROOT' , __DIR__);
require_once(ROOT.'/components/Router.php');
require_once (ROOT.'/db/rb-mysql.php');
R::setup( 'mysql:host=localhost;dbname=redbeanphp','root', '');
$router = new Router;
$router->Run();
ob_start();
?>



