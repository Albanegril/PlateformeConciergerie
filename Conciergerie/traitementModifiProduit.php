<?php
include_once ("BDopen.php");
        if(isset($_POST['modifier'] )){
            //TRAITEMENT POST 
            $code = $_POST['code']; // = la clé du produit à modifier !

            $produit = "UPDATE produit SET";

        	$nom = $_POST['nom'];
        	$lien = $_POST['lien'];
        	$marque = $_POST['marque']; // num
        	$fournisseur = $_POST['fournisseur']; // num

         $illustration = $_POST['illustration']; /// quoi ??
         $code = $_POST['code']; /// ???? comment 

        	$device = $_POST['device'];
        	$volume = $_POST['volume'];
         	$type = $_POST['type']; // num
         	$categories = $_POST['categories'];  // il faut séparer les catégories ?
         	$descriptif = $_POST['descriptif'];
			
			$originalP = $_POST['originalP'];
        	$savingP = $_POST['savingP'];
         	$shippingP = $_POST['shippingP'];
         	$discountP = $_POST['discountP'];
         	$afterdiscountP = $_POST['afterdiscountP'];

         	$marge = 20;
         	$concurrenceMin = 0;
         	$concurrenceNom = 0;  // ne pas insert de valeur ?

        // set device value default is euro
         if($device == 2){
          $device = "$";
         }
         elseif ($device == 3) {
            $device = "£";
         }
         else{
          $device = "€";
         }

            if (isset($_POST['nom'])) {
                $produit += " nom='$nom', ";
            }
            if (isset($_POST['device'])) {
                $produit += " device='$device', ";
            }
            if (isset($_POST['description'])) {
                $produit += " produitsInclus='$description', ";
            }
            if (isset($_POST['marque'])) {
                $produit += " numMarque='$marque', ";
            }
            if (isset($_POST['type'])) {
                $produit += " numTypeProduit='$type', ";
            }
            if (isset($_POST['lien'])) {
                $produit += " URLProduit='$lien', ";
            }
            if (isset($_POST['illustration'])) {
                $produit += " imageProduit='$illustration' ";
            }


          $produit += "  WHERE numProduit='$code' ";
          $Connect->query($produit);

          $produitfinal = "UPDATE produitfinal SET ";

            if (isset($_POST['fournisseur'])) {
                $produitfinal += " numFournisseur='$fournisseur', ";
            }
            if (isset($_POST['volume'])) {
                $produitfinal += " numVolume='$volume', ";
            }
            if (isset($_POST['discountP'])) {
                $produitfinal += " discount='$discountP', ";
            }
            if (isset($_POST['originalP'])) {
                $produitfinal += " originalPrice='$originalP', ";
            }
            if (isset($_POST['savingP'])) {
                $produitfinal += " saving='$savingP', ";
            }
            if (isset($_POST['shippingP'])) {
                $produitfinal += " shipping='$shippingP', ";
            }
            if (isset($_POST['marge'])) {
                $produitfinal += " marge='$marge' ";
            }
            if (isset($_POST['concurrenceMin'])) {
                $produitfinal += " concurrenceMin='$concurrenceMin', ";
            }
            if (isset($_POST['concurrenceNom'])) {
                $produitfinal += " concurrenceNom='$concurrenceNom' ";
            }

          $produitfinal += "  WHERE numProduit='$code' "; 
          $Connect->query($produitfinal);
        }
        header('Location:gestionProduit.php');
        ?>