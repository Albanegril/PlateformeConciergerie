<?php
include_once ("BDopen.php");
        if(isset($_POST['ajouter']) && isset($_POST['nom']) && isset($_POST['lien']) && isset($_POST['marque']) && isset($_POST['fournisseur']) && isset($illustration = $_POST['illustration']) && isset($code = $_POST['code']) && isset($_POST['device']) && isset($_POST['volume']) && isset($_POST['type']) && isset($_POST['categories']) && isset($_POST['descriptif']) && isset($_POST['originalP']) && isset($_POST['savingP']) && isset($_POST['shippingP']) && isset($_POST['discountP']) && isset($_POST['afterdiscountP'])){
            //TRAITEMENT POST 
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

         // quel est le nom des tables ?
          $produit = "INSERT INTO produit(numProduit, nom, device, produitsInclus, numMarque, numTypeProduit, URLProduit, imageProduit) VALUES ('$code', '$nom', '$device', '$description', '$marque', '$type', '$lien', '$illustration')";
          $Connect->query($produit);

          $produitfinal = "INSERT INTO produitfinal(numFournisseur, numVolume, numProduit, discount, originalPrice, saving, shipping, marge, concurrenceMin, concurrenceNom) VALUES ('$fournisseur', '$volume', '$code', '$discountp', '$originalP', '$savingP', '$shippingP', '$marge', '$concurrenceMin', '$concurrenceNom');"; 
          $Connect->query($produitfinal);

        }
header('Location:gestionProduit.php');
        ?>