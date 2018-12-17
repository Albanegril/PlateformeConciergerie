<?php
include_once ("BDopen.php");
    if(isset($_POST['supprimer'] )){ 

    	if (isset($_POST['nom'])) {
    		$nom = $_POST['nom'];
    		$produit += "DELETE FROM produit WHERE nom='$nom' ";
    		$Connect->query($produit);
    		$produitfinal += "DELETE FROM produitfinal WHERE nom='$nom' ";
    		$Connect->query($produitfinal);
    	}
    	if (isset($_POST['code'])) {
    		$code = $_POST['code'];
    		$produit += "DELETE FROM produit WHERE numProduit='$code' ";
    		$Connect->query($produit);
    		$produitfinal += "DELETE FROM produitfinal WHERE numProduit='$code' ";
    		$Connect->query($produitfinal);
    	}
    }
    header('Location:gestionProduit.php');
?>