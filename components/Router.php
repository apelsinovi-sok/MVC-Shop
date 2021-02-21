<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
class Router{
private $routes;
private $classUrl;

public function __construct(){
  $patch = ROOT.'/config/routes.php';
  $this->routes = include($patch);// возвращает массив типа url => класс/метод
}
private function getUrl(){
	if(!empty($_SERVER['REQUEST_URI'])){
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}

public function Run(){

$uri = $this->getUrl();
$filter = explode('?sort=', $uri);// если в полученном url есть сортировка, вырезать ее из ссылки
$uri = array_shift($filter);

foreach ($this->routes as $key => $value){//перебор массива

  if(preg_match("~$key~", $uri)){//поиск совпадений в массиве роутов

  $iternalRoute = preg_replace("~$key~", $value, $uri);//подстановка данных согласно регулярному выражению 
  $value = explode('/', $iternalRoute);
  $controlName = array_shift($value).'Controller';
  $controlName = ucfirst($controlName);// объявление класса контроллера
  $actionName = 'action'.ucfirst(array_shift($value));// объявление метода вызываемого из контроллера
  $classUrl = ROOT.'/controllers/'.$controlName.'.php';
  include_once($classUrl);
  $ObjectController = new $controlName;
  $ObjectController->$actionName($value, $filter['0']);// переменная value содержит массив со значением категории и номера продукта, filter содержит значение выбранного фильтра , если тот установлен
  break;
      }
    }
  }
}
?>
