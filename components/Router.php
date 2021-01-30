<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
ob_start();
class Router{
private $routes;
private $classUrl;
public function __construct(){
$patch = ROOT.'/config/routes.php';
$this->routes = include($patch);
}
private function getUrl(){
	if(!empty($_SERVER['REQUEST_URI'])){
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}


public function Run(){
$uri = $this->getUrl();
$filter = explode('?=', $uri);
$uri = array_shift($filter);

foreach ($this->routes as $key => $value){
  if(preg_match("~$key~", $uri)){
  $iternalRoute = preg_replace("~$key~", $value, $uri); 
  $value = explode('/', $iternalRoute);
  $controlName = array_shift($value).'Controller';
  $controlName = ucfirst($controlName);
  $actionName = 'action'.ucfirst(array_shift($value));
  $classUrl = ROOT.'/controllers/'.$controlName.'.php';
  include_once($classUrl);
  $ObjectController = new $controlName;
  $ObjectController->$actionName($value, $filter['0']);
  break;
      } 
    } 
  }
}
ob_start();
?>

<!-- <input type="text" class="title" name="title">
<button id="lol">Кнопка</button>
 -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('button#lol').click(function() {
            var titleVar = $('input.title').val();
            $.ajax({
                method: 'POST',
                url: 'rrr.php',
                data: {title : titleVar}
            })
                .done(function(data) {
                   $('#hello').html(data);
                });
        });
    });
</script>  -->


