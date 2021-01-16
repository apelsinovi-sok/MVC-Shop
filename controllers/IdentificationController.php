<?php
class IdentificationController {

	public function actionregistration(){
		require_once(ROOT.'/models/MainRegistration.php');
		require_once(ROOT.'/views/registration.php');
		if (isset($_POST['registration'])) {
         	echo MainRegistration::DataChecking();

         }
	}

	public function actionauthorization(){
		require_once(ROOT.'/models/MainAuthorization.php');
		require_once(ROOT.'/views/authorization.php');
	}
}

?>

<!-- '/^[A-Za-z0-9\s]+$/' --> 