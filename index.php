

<?php

define('ROOT' , dirname(__FILE__));

require_once(ROOT.'/components/Router.php');
require (ROOT.'/db/rb-mysql.php');
R::setup( 'mysql:host=localhost;dbname=redbeanphp','root', '');
$router = new Router;
$router->Run();
?>

