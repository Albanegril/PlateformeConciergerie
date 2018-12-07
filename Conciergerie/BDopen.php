<?php
	$Server="localhost";
	$User="root";
	$Pwd="";
	$DB="Conciergerie";
	$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
	if (!$Connect){
		echo "Echec connexion à la base";
	} 
	echo "Connexion à la base";
	// BD connecté

	 session_start();

?>