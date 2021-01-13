<?php
class GetRequest{

public static function Request($filter){

	$patch = ROOT.'/config/filterRoutes.php';

	$routes = include ($patch);

	foreach ($routes as $key => $value) {
	    if (preg_match("~$key~", $filter)) {
	    	return $value;
	    	break;
         
      }
     }
    }
  }

?> 