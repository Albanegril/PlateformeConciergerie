<?php
include('../BDopen.php');

$sql = 'SELECT numfournisseur,nom,nomTypeProduit,nomCategorie,quantiteVolume,typeVolume,originalPrice,imageMarque,imageFournisseur from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join typeproduitcategorie natural join categorie natural join volume natural join marque;';
$result = mysqli_query($Connect, $sql);
$myArray = array();
if ($result) {

    while($row = mysqli_fetch_assoc($result)) {
        $myArray[] = json_encode($row);
        //echo $row['nom'];
        
    }
   
    $json= json_encode($myArray);
    
   echo $json;
}
?>