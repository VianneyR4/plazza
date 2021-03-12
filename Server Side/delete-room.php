<?php         
    require_once('function.php');
		session_start();
		
		// where to work [ROOM] ............
		if (isset($_GET['id'])){
			$query_delete_room = $db->prepare('DELETE FROM chambres WHERE ID=:ard_ID');
			$query_delete_room->execute(array(
					'ard_ID' => $_GET['id']
			));
			$verif_hl =  'ok';
			header('location:../UI/admin/chambre-toute.php');
		}
		// where to work [ROOM] ............
		
		// where to work [IMG] ............
		if (isset($_GET['img_id'])){
			$query_delete_room_img = $db->prepare('DELETE FROM chambre_img WHERE ID=:img_ID');
			$query_delete_room_img->execute(array(
					'img_ID' => $_GET['img_id']
			));
			$verif_img_d =  'ok';
			if (isset($_GET['room_from_img_id'])){
				header('location:../UI/admin/chambre-edite.php?room_to_edite='.$_GET['room_from_img_id'].'');
			}
		}
		// where to work [IMG] ............
		
		// where to work [GALERIE] ............
		if (isset($_GET['galerie_img_id'])){
			$query_delete_room_img = $db->prepare('DELETE FROM galerie WHERE ID=:galerie_img_ID');
			$query_delete_room_img->execute(array(
					'galerie_img_ID' => $_GET['galerie_img_id']
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/galerie-toute.php');
		}
		// where to work [GALERIE] ............
		
		// where to work [BLOG] ............
		if (isset($_GET['blog_id'])){
			$query_delete_room_img = $db->prepare('DELETE FROM blog WHERE ID=:blog_id');
			$query_delete_room_img->execute(array(
					'blog_id' => $_GET['blog_id']
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/blog-tout.php');
		}
		// where to work [BLOG] ............
		
		// where to work [TEMOIGNAGE] ............
		if (isset($_GET['temoignage_id'])){
			$query_delete_room_img = $db->prepare('DELETE FROM temoignage WHERE ID=:temoignage_id');
			$query_delete_room_img->execute(array(
					'temoignage_id' => $_GET['temoignage_id']
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/temoignage-tout.php');
		}
		// where to work [TEMOIGNAGE] ............

		// where to work Update [BOOKING CONFIRMATION] ............
		if (isset($_GET['id_to_confirm'])){
			$new_value = 'yes';
			$new_value2 = 'rejected';
			$new_value_availability = 'no';
			$query_update_booking = $db->prepare('UPDATE booking SET confirmation=:new_value WHERE ID=:id_to_confirm');
			$query_update_booking->execute(array(
					'id_to_confirm' => $_GET['id_to_confirm'],
					'new_value' => $new_value
			));
			// send a mail to the good client (booking successfully)...
			$qm1 = $db->prepare('SELECT * FROM booking WHERE ID=:id_to_confirm');
			$qm1->execute(array(
				'id_to_confirm' => $_GET['id_to_confirm']
			));
			foreach ($qm1 as $data_qm1){
				$subject = "Reservation reussi de la chambre numero \"".$_GET['numChambre']."\"";
				$txt = "Madame, Monsieur,\n\n\nVotre reservation de la chambre numero \"".$data_qm1['numChambre']."\" du \"".$data_qm1['entre']."\" au \"".$data_qm1['sortie']."\" au Prix Total de \"".$data_qm1['prix']."\" a reussi avec succe.\n\nMerci de nous avoir fait confiance car nous ne vous decevrons pas. \n\n--------------------------------------------\n| LA JOIE PLAZZA HOTEL est a votre service. |\n--------------------------------------------\n\n\n\nPour plus d'info contacter nous a ces numero(appel/whatsapp): ".'+(243) 812082665,+(243) 994326446';
				$headers = "From: lajoieplazza.com";

				mail($data_qm1['mail'],$subject,$txt,$headers);
			}

			$query_update_booking = $db->prepare('UPDATE booking SET confirmation=:new_value2 WHERE numChambre=:numChambre AND confirmation!=:new_value');
			$query_update_booking->execute(array(
					'numChambre' => $_GET['numChambre'],
					'new_value2' => $new_value2,
					'new_value' => $new_value
			));
			// send a mail to the not good client (faild to book)...
			$qm2 = $db->prepare('SELECT * FROM booking WHERE numChambre=:numChambre AND confirmation!=:new_value');
			$qm2->execute(array(
				'numChambre' => $_GET['numChambre'],
				'new_value' => $new_value
			));
			$link_accomodation = 'http://www.lajoieplazza.com/UI/fr/accomodation.php';
			foreach ($qm2 as $data_qm2){
				$subject = "Reservation echoué de la chambre numero \"".$_GET['numChambre']."\"";
				$txt = "Madame, Monsieur,\n\n\nNous sommes desolé, la chambre numero \"".$data_qm2['numChambre']."\" est prise pour le moment, vauillez choisir une autre chambre <a href='{$link_accomodation}'>ici</a>.\n\n\nMerci de nous avoir fait confiance car nous ne vous decevrons pas. \n\n--------------------------------------------\n| LA JOIE PLAZZA HOTEL est a votre service. |\n--------------------------------------------\n\n\n\nPour plus d'info contacter nous a ces numero(appel/whatsapp): ".'+(243) 812082665,+(243) 994326446';
				$headers = "From: lajoieplazza.com";

				mail($data_qm2['mail'],$subject,$txt,$headers);
			}

			$query_update_room_availability = $db->prepare('UPDATE chambres SET disponibilite=:new_value_availability WHERE numero=:numChambre');
			$query_update_room_availability->execute(array(
					'numChambre' => $_GET['numChambre'],
					'new_value_availability' => $new_value_availability
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/booking.php');
		}
		// where to work Update [BOOKING CONFIRMATION] ............
		
		// where to work Update [ROOM DISPONIBILITY] ............
		if (isset($_GET['id_availability'])){
			$new_value_availability2 = 'yes';
			$query_update_room_availability = $db->prepare('UPDATE chambres SET disponibilite=:new_value_availability WHERE ID=:id_availability');
			$query_update_room_availability->execute(array(
					'id_availability' => $_GET['id_availability'],
					'new_value_availability' => $new_value_availability2
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/chambre-toute.php');
		}
		// where to work Update [ROOM DISPONIBILITY] ............

		// where to work [BOOKING REJECTED] ............
		if (isset($_GET['to_reject'])){
			$new_value2 = 'rejected';
			$query_delete_room_img = $db->prepare('DELETE FROM booking WHERE confirmation=:new_value2');
			$query_delete_room_img->execute(array(
					'new_value2' => $new_value2
			));
			$verif_img_d =  'ok';
				header('location:../UI/admin/booking.php');
		}
		// where to work [BOOKING REJECTED] ............
?>