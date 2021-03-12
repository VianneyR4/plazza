<?php
	if (!isset($_SESSION['admin_ID'])){
		header('location:index.php');
	}

	if (isset($_POST['submit_update_blog'])){
		#code...
		
		$query_upload_room = $db->prepare('UPDATE blog SET bloger=:bloger,gender=:gender,title=:title,article=:article WHERE ID=:this_blog_ID');
		$query_upload_room->execute(array(
			'this_blog_ID' => $_GET['blog_to_edite'],
			'bloger' => $_POST['bloger'],
			'gender' => $_POST['gender'],
			'title' => $_POST['title'],
			'article' => $_POST['article']
		));

		$update_message = 'ok';

		if (!empty($_FILES['blog_files']['name'][0])) {
			#code...
			$files = $_FILES['blog_files'];

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
								$file_name_new = uniqid('Plazza-IMG-BLOG-', true) . '.'  . $file_ext;
								$file_destination = '../uploads/blog/' . $file_name_new;

								if (move_uploaded_file($file_tmp, $file_destination)){
									#code...
									$uploaded[$position] = $file_destination;
									
									$query_upload_room = $db->prepare('UPDATE blog SET image=:img_name WHERE ID=:this_blog_ID');
									$query_upload_room->execute(array(
										'this_blog_ID' => $_GET['blog_to_edite'],
										'img_name' => $file_name_new
									));

								} else {
									$failed[$position] = "[{$file_name}] echec!";
								}

							} else {
								$failed[$position] = "[{$file_name}] le fichier est tres lourd, taille '{$file_size}' > a 2MB, veuillez le modifier un peu puis reessayer.";
							}
						} else {
							$failed[$position] = "[{$file_name}] erreur du telechargemrnt, erreur code '{$file_error}'.";
						}
				 } else {
					 $failed[$position] = "[{$file_name}] les fichiers '{$file_ext}' ne sont pas authoriser!";	
				 }
			}

		}
	}
?>