<?php
	$Server="localhost";
	$User="root";
	$Pwd="";
	$DB="conciergerie";
	$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
	if (!$Connect){
		echo "Echec connexion à la base";
	} 

?>