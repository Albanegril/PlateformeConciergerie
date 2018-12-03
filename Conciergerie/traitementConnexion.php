<?php include_once ("BDopen.php"); ?>

<?php

// num -> pseudo
// mdp -> password
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];

	if(isset($_POST['pseudo'])){

		//$Query="SELECT Password, Nom FROM User WHERE Pseudo ='$pseudo'";
		//$Result = $Connect->query($Query);
		//$Data = mysqli_fetch_array($Result);

		if($mdp == $Data[0]){
			echo 'OK';
			session_start(); 
			$_SESSION['nom'] = $Data[1];
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['password'] = $Data[0];
			header('Location: http://localhost/Conciergerie/index.php');
		}
		else {
			echo '<span class="erreur">Mauvais mot de passe</span>';
			//erreur
		}
	}
	else{
		echo '<span class="erreur">Mauvais Pseudo</span>';
		// erreur
	}

	mysqli_close($Connect);
	// BD déconnecté

?>