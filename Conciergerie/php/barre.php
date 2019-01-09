<?php
include('../BDopen.php');

$sql = 'select numfournisseur,nom,nomTypeProduit,nomCategorie,quantiteVolume,typeVolume,originalPrice,imageMarque,imageFournisseur from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join typeproduitcategorie natural join categorie natural join volume natural join marque;';
$result = mysqli_query($mysqli, $sql);
$myArray = array();
if ($result) {

    while($row = mysqli_fetch_assoc($result)) {
        $myArray = $row;
        echo $row['nom'];
        
    }
  // echo $myArray[0];
   $myArray = array_map('htmlentities',$myArray);
   $json = html_entity_decode(json_encode($myArray));
   echo $json;
}

?>