<?php
class AdminpanelController
{
	public function actionaddproduct(){

		if($_SESSION['user_status']==0){
			header('Location: /');
		}
		require_once(ROOT.'/views/header.php');

		require_once(ROOT.'/models/MainAdminPanel.php');

		if (isset($_POST['load_product'])) {
		MainAdminPanel::LoadingProduct();
		
	    }

		require_once(ROOT.'/views/admin.php');
		
	}
}
?>