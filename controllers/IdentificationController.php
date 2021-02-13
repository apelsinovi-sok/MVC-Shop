<?php
class IdentificationController {


	public function actionregistration(){
		require_once(ROOT.'/models/MainRegistration.php');
		require_once(ROOT.'/views/registration.php');
		require_once(ROOT.'/models/MainAuthorization.php');
		if (isset($_POST['registration'])) {
         	if (MainRegistration::DataChecking() === true) {
						MainAuthorization::DataChecking();
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

	public function actionexit(){
		header('Location: /');
      unset($_SESSION['user']);
      unset($_SESSION['basket']);
	    unset($_SESSION['sum']);
	    unset($_SESSION['user_id']);
			unset($_SESSION['user_status']);
   }


	public function actionbasket(){
	require_once(ROOT.'/models/MainOutputBasket.php');
    require_once(ROOT.'/views/basket.php');
    if (empty($_SESSION['user'])) {
    	header('Location: /');
    }
    }

}


?>
