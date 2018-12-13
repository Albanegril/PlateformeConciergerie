<?php
	session_start();
	$_SESSION = array(); // Détruit toutes les variables de session
	session_destroy(); // Détruit la session

	header('Location:index.php');
?>