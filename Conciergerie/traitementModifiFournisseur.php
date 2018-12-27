<?php
include_once ("BDopen.php");
        if(isset($_POST['modifier']) && isset($_POST['code'])){
            //TRAITEMENT POST 
            $code = $_POST['code']; // = la clé du produit à modifier !

            $fournisseur = "UPDATE fournisseur SET";

            $nom = $_POST['nom'];
            $lien = $_POST['lien'];

         $illustration = $_POST['illustration']; /// quoi ??
         $code = $_POST['code']; /// ???? comment 

            if (isset($_POST['nom'])) {
                $fournisseur += " nomFournisseur='$nom', ";
            }
            if (isset($_POST['lien'])) {
                $fournisseur += " URLFournisseur='$lien', ";
            }
            if (isset($_POST['illustration'])) {
                $fournisseur += " imageFournisseur='$illustration' ";
            }


          $fournisseur += "  WHERE numFournisseur='$code' ";
          $Connect->query($fournisseur);

          
        }
        header('Location:gestionFournisseur.php');
        ?>