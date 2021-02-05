<?php
class MainAuthorization{


	public static function DataChecking(){
		$user = R::findOne('user', 'email = ?', [$_POST['email']]);
		if($user){
			if (password_verify($_POST['password'], $user->password)) {
				$_SESSION['user'] = $user->email;
				$_SESSION['user_id'] = $user->id;
				$_SESSION['user_status'] = $user->status;
				self::UpdateBasket($user);
				return true;
			}
			return false;
		}
	}
	
	public static function UpdateBasket($user){
		
		$_SESSION['basket'] = json_decode($user->basket, true);
		$basket = $_SESSION['basket'];
		foreach ($basket as $key => $value) {
	   	$value1 = $value1 + $value;
	    }
	    $_SESSION['sum'] = $value1;
	}

}


?>