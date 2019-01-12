<?php
include_once ("BDopen.php");
        if(isset($_POST['ajouter']) && isset($_POST['nom']) && isset($_POST['lien']) && isset($_POST['illustration'])){
            //TRAITEMENT POST 
        	$nom = $_POST['nom'];
        	$lien = $_POST['lien'];

         $illustration = $_POST['illustration']; /// nom image
        // $code = $_POST['code']; /// 

         echo $nom;
         echo $lien;
         echo $illustration;
         // quel est le nom des tables ?
          $marque = "INSERT INTO marque(nomMarque, URLMarque, codeMarque, imageMarque) VALUES ('$nom', '$lien', 'null', '$illustration')";
          $Connect->query($marque);

        }
header('Location:gestionMarque.php');
        ?>