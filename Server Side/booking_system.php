<?php
	if (isset($_GET['SubmitBooking'])){
		$uQuery_verif_availability = $db->prepare('SELECT * FROM chambres WHERE numero=:num');
		$uQuery_verif_availability->execute(array(
				'num' => $_GET['bookingRoom']
		));
		foreach($uQuery_verif_availability as $uData_verif_availability){
				if($uData_verif_availability['disponibilite'] == "yes"){
						// code...
						$now   = time();
						$date2 = strtotime('2012-08-14 16:01:05');
						
						function dateDiff($date1, $date2){
								$diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
								$retour = array();
						
								$tmp = $diff;
								$retour['second'] = $tmp % 60;
						
								$tmp = floor( ($tmp - $retour['second']) /60 );
								$retour['minute'] = $tmp % 60;
						
								$tmp = floor( ($tmp - $retour['minute'])/60 );
								$retour['hour'] = $tmp % 24;
						
								$tmp = floor( ($tmp - $retour['hour'])  /24 );
								$retour['day'] = $tmp;
						
								return $retour['day'];
						}
						
						// print_r( dateDiff($now, $date2) );
						
						$dateArrive = strtotime($_GET['bookingArrive']);
						$dateDepart = strtotime($_GET['bookingDepart']);
						$tprix = $uData_verif_availability['prix']*dateDiff($dateDepart, $dateArrive);

						$myConfirmation = "pas encore";
						$uQuery_booking = $db->prepare('INSERT INTO booking(entre,sortie,numChambre,phone,mail,confirmation,pu,prix) VALUES(:entre,:sortie,:numChambre,:phone,:mail,:confirmation,:pu,:prix)');
						$uQuery_booking->execute(array(
								'entre' => $_GET['bookingArrive'],
								'sortie' => $_GET['bookingDepart'],
								'numChambre' => $_GET['bookingRoom'],
								'phone' => $_GET['bookingNumber'],
								'mail' => $_GET['bookingMail'],
								'confirmation' => $myConfirmation,
								'pu' => $uData_verif_availability['prix'],
								'prix' => $tprix
						));

						$bookingMsg ='
						<div class="myModal-body">
								<img src="../image/checked.png" /><br><br/>
								<p>Votre demande a etait envoyer avec succé!</p>
								<div style="border-bottom: 1px dashed #ccc;margin: 30px 20px 30px;"></div>
								<p>Vous allez recevoir un mail sur<br/>'.$_GET['bookingMail'].'</p>
						</div>';
						// envoyer un mail a l'utilisateur ...
						$subject = "Notification de reservation de la chambre numero \"".$_GET['bookingRoom']."\"";
						$txt = "Madame, Monsieur,\n\n\nSuite à votre reservation effectuée sur notre site. Nous sommes entrain de verifier pour valider votre commande, nous vous prions de patienter pour un mail de confirmation dans moin de 24h.\n\nMerci de nous avoir fait confiance car nous ne vous decevrons pas. \n\n--------------------------------------------\n| LA JOIE PLAZZA HOTEL est a votre service. |\n--------------------------------------------\n\n\n\nPour plus d'info contacter nous a ces numero(appel/whatsapp): ".'+(243) 812082665,+(243) 994326446';
						$headers = "From: lajoieplazza.com";

						mail($_GET['bookingMail'],$subject,$txt,$headers);

						// envoyer un mail a l'admin ...
						$link_reservation_admin = 'http://www.lajoieplazza.com/UI/admin/booking.php';
						$subject2 = "Notification Admin de reservation de la chambre numero \"".$_GET['bookingRoom']."\"";
						$txt2 = "Ouver le paneau d'administration du site lajoieplazza.com pour gerer cette commende. \nLien: http://lajoieplazza.com/UI/admin/booking.php (connectez-vous d'abord a l'espace administrateur ici: http://lajoieplazza.com/UI/admin).";
						$headers2 = "From: lajoieplazza.com";

						$address_mail2 = 'lajoieplazzahotel@gmail.com';
						mail($address_mail2,$subject2,$txt2,$headers2);
				}
				else{
						// room not disponible ...
						$bookingMsg ='
						<div class="myModal-body">
							<img src="../image/sad.png" /><br>
								<p>la chambre '.$_GET['bookingRoom'].' est prise pour le moment!</p>
						</div>';
				}
		}
		if(!isset($uData_verif_availability)){
				// room doesn't exist ...
				$bookingMsg ='
				<div class="myModal-body">
				<img src="../image/sad.png" /><br>
						<p>La chambre numero '.$_GET['bookingRoom'].' n\'est pas trouver!</p>
				</div>';
		}
	}

	// echo $bookingMsg;
?>