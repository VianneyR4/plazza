<?php
	if (!isset($_SESSION['admin_ID'])){
		header('location:index.php');
	}

	if (isset($_POST['edite_room'])){
		#code...
		$disponibilite = 'yes';
		$prix_total = 00;
		
		$query_upload_room = $db->prepare('UPDATE chambres SET type=:type,numero=:numero,standard=:standard,stars=:stars,description=:description,wifi=:wifi,tv=:tv,prix=:prix WHERE ID=:this_ID');
		$query_upload_room->execute(array(
			'this_ID' => $_GET['room_to_edite'],
			'type' => $_POST['type'],
			'numero' => $_POST['numero'],
			'standard' => $_POST['standard'],
			'stars' => $_POST['stars'],
			'description' => $_POST['description'],
			'wifi' => $_POST['wifi'],
			'tv' => $_POST['tv'],
			'prix' => $_POST['prix']
		));
		$update_message = 'ok';

		if (!empty($_FILES['files']['name'][0])) {
			#code...
			$files = $_FILES['files'];

			$uploaded = array();
			$failed = array();
			$allowed = array('jpeg','jpg','png');

			foreach($files['name'] as $position => $file_name){
				 #code...
				 $file_tmp = $files['tmp_name'][$position];
				 $file_size = $files['size'][$position];
				 $file_error = $files['error'][$position];

				 $file_ext = explode('.', $file_name);
				 $file_ext = strtolower(end($file_ext));

				 if (in_array($file_ext, $allowed)){
					 #code..
						if ($file_error === 0){
							#code..
							if ($file_size <= 2097152){
								#code..
								$file_name_new = uniqid('Plazza-ROOM'.$_POST['numero'].'-IMG-', true) . '.'  . $file_ext;
								$file_destination = '../uploads/rooms/' . $file_name_new;

								if (move_uploaded_file($file_tmp, $file_destination)){
									#code...
									$uploaded[$position] = $file_destination;
									
									$query_upload_img_room = $db->prepare('INSERT INTO chambre_img(chambre_num,img_name,img_type,img_size) VALUES(:chambre_num,:img_name,:img_type,:img_size)');
									$query_upload_img_room->execute(array(
										'chambre_num' => $_POST['numero'],
										'img_name' => $file_name_new,
										'img_type' => $file_ext,
										'img_size' => $file_size
									));

								} else {
									$failed[$position] = "[{$file_name}] echec!";
								}

							} else {
								$failed[$position] = "[{$file_name}] le fichier est tres lourd, taille '{$file_size}' > a 2MB, veuillez le modifier un peu puis reessayer.";
							}
						} else {
							$failed[$position] = "[{$file_name}] ce fichier contien d'erreur, erreur code '{$file_error}'.";
						}
				 } else {
					 $failed[$position] = "[{$file_name}] les fichiers '{$file_ext}' ne sont pas authoriser!";	
				 }
			}

		}
	}
?>