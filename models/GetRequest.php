<?php
class GetRequest{

public static function Request($filter){//поиск sql запросу исходя из параметра фильтрации

	$routes = include_once ( ROOT.'/config/filterRoutes.php');//массив вида параметр => sql запрос

	foreach ($routes as $key => $value) {
	    if (preg_match("~$key~", $filter)) {
	    	return $value;
	    	break;

      }
     }
    }
  }

?>
