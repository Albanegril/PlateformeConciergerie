<?php
include_once ("BDopen.php");
    if(isset($_POST['supprimer'] )){ 

    	if (isset($_POST['nom'])) {
    		$nom = $_POST['nom'];
    		$fournisseur += "DELETE FROM fournisseur WHERE nomFournisseur='$nom' ";
    		$Connect->query($fournisseur);
    	}
    	if (isset($_POST['code'])) {
    		$code = $_POST['code'];
    		$fournisseur += "DELETE FROM fournisseur WHERE numFournisseur='$code' ";
    		$Connect->query($fournisseur);
    	}
    }
    header('Location:gestionFournisseur.php');
?>