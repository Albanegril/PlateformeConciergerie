<?php
include_once ("BDopen.php");
    if(isset($_POST['supprimer'] )){ 

    	if (isset($_POST['nom'])) {
    		$nom = $_POST['nom'];
    		$marque += "DELETE FROM marque WHERE nomMarque='$nom' ";
    		$Connect->query($marque);
    	}
    	if (isset($_POST['code'])) {
    		$code = $_POST['code'];
    		$marque += "DELETE FROM marque WHERE numMarque='$code' ";
    		$Connect->query($marque);
    	}
    }
    header('Location:gestionMarque.php');
?>