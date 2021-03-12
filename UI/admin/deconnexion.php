<?php
	require_once('../../Server Side/function.php');
	session_start();
	session_destroy();
		header('location:index.php');
?>