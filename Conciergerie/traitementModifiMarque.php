<?php
include_once ("BDopen.php");
        if(isset($_POST['modifier']) && isset($_POST['code'])){
            //TRAITEMENT POST 
            $code = $_POST['code']; // = la clé du produit à modifier !

            $marque = "UPDATE marque SET";

            $nom = $_POST['nom'];
            $lien = $_POST['lien'];

         $illustration = $_POST['illustration']; /// quoi ??
         $code = $_POST['code']; /// ???? comment 

            if (isset($_POST['nom'])) {
                $marque += " nommMarque='$nom', ";
            }
            if (isset($_POST['lien'])) {
                $marque += " URLMarque='$lien', ";
            }
            if (isset($_POST['illustration'])) {
                $marque += " imageMarque='$illustration' ";
            }


          $marque += "  WHERE numMarque='$code' ";
          $Connect->query($marque);

          
        }
        header('Location:gestionMarque.php');
        ?>