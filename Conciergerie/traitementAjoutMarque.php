<?php
include_once ("BDopen.php");
        if(isset($_POST['ajouter'] && isset($_POST['nom']) && isset($_POST['lien']) && isset($_POST['illustration']) && isset($_POST['code']))){
            //TRAITEMENT POST 
        	$nom = $_POST['nom'];
        	$lien = $_POST['lien'];

         $illustration = $_POST['illustration']; /// nom image
         $code = $_POST['code']; /// ???? comment 


         // quel est le nom des tables ?
          $marque = "INSERT INTO marque(nomMarque, URLMarque, codeMarque, imageMarque) VALUES ('$code', '$nom', '$lien', '$illustration')";
          $Connect->query($marque);

        }
header('Location:gestionMarque.php');
        ?>