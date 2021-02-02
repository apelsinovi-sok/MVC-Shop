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
         		echo '<script>
	                 alert("'.MainRegistration::DataChecking().'");
                     </script>';
         		
         	}
         }
	}

	public function actionauthorization(){
		require_once(ROOT.'/models/MainAuthorization.php');
		require_once(ROOT.'/views/authorization.php');
		if (isset($_POST['authorization'])) {
			if (MainAuthorization::DataChecking()) {
			 	header('Location: /');  
			 	

			 }
			 else {
			 	echo "<script>
	                 alert('Неверная почта или пароль');
                     </script>";
		   }
		}
	}

	public function actionboot(){
		require_once(ROOT.'/views/boot.php');
	}


	public function actionprofile(){
	require_once(ROOT.'/models/MainOutputBasket.php');
    require_once(ROOT.'/views/profile.php');
    
    }

}


?>

