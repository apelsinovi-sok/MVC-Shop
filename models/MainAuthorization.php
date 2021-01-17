<?php
class MainAuthorization{

	public static function DataChecking(){
		$user = R::findOne('user', 'email = ?', [$_POST['email']]);
		if($user){
			if (password_verify($_POST['password'], $user->password)) {
				$_SESSION['user'] = $user->email;
				return true;
			}
			return false;
		}
	}
	
}


?>