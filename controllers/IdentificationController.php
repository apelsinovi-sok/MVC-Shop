<?php
class IdentificationController {

	public function actionexit(){
		header('Location: /');
        unset($_SESSION['user']);
   }

	public function actionregistration(){
		require_once(ROOT.'/models/MainRegistration.php');
		require_once(ROOT.'/views/registration.php');
		if (isset($_POST['registration'])) {
         	if (MainRegistration::DataChecking() === true) {
         		header('Location: /');
         	} else {
         		echo MainRegistration::DataChecking();
         	}
         }
	}

	public function actionauthorization(){
		require_once(ROOT.'/models/MainAuthorization.php');
		require_once(ROOT.'/views/authorization.php');
		if (isset($_POST['authorization'])) {
			if (MainAuthorization::DataChecking()) {
			 	echo "Авторизация успешна";
			 	header('Location: /');
			 }
			 else {
			 	echo "Неверная почта или пароль";
		   }
		}
	}

	public function actionboot(){
		require_once(ROOT.'/views/boot.php');
	}	
}
?>

