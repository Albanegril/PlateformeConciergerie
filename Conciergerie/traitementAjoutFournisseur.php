<?php
include_once ("BDopen.php");
        if(isset($_POST['ajouter']) && isset($_POST['nom']) && isset($_POST['lien']) && isset($_POST['illustration']) /*&& isset($_POST['code']) */){
            //TRAITEMENT POST 
            $nom = $_POST['nom'];
            $lien = $_POST['lien'];

         $illustration = $_POST['illustration']; /// nom image
         $code = "null"; // $_POST['code']; /// ???? comment 

          $fournisseur = "INSERT INTO fournisseur(numFournisseur, nomFournisseur, URLFournisseur, imageFournisseur) VALUES ('$code', '$nom', '$lien', '$illustration')";
          $Connect->query($fournisseur);

        }
header('Location:gestionFournisseur.php');
        ?>