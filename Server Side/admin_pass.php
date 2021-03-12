<?php
	if (isset($_POST['connexion'])){
		#code...
		$query = $db->prepare('SELECT * FROM admin WHERE admin_mail=:mail');
		$query->execute(array(
			'mail' => $_POST['admin_mail']
		));
		foreach($query as $admin_data){
			#code...
			$admin_ID = $admin_data['ID'];
			$admin_mail = $admin_data['admin_mail'];
			$admin_password = $admin_data['admin_password'];
		}
		if (isset($admin_data)){
			if ($_POST['admin_password'] == $admin_password){
				#code...
				$_SESSION['admin_ID'] = $admin_ID;
				header('location:home.php');
			}
			else {
				$erreur_message_password = 'mot de passe incorrect!';
			}
		}
		else {
			$erreur_message_mail = 'mail introuvable!';
		}
	}
?>