<?php
include('../BDopen.php');

$sql = 'SELECT numfournisseur,nom,nomTypeProduit,nomCategorie,quantiteVolume,typeVolume,originalPrice,imageMarque,imageFournisseur from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join typeproduitcategorie natural join categorie natural join volume natural join marque;';
$result = mysqli_query($Connect, $sql);
$myArray = array();
if ($result) {

    while($row = mysqli_fetch_row($result)) {
        $myArray[] = $row;
        //echo $row['nom'];
        
    }
    //var_dump($myArray);
    var_dump(json_encode($myArray, JSON_FORCE_OBJECT));
    $json = json_encode($myArray,JSON_FORCE_OBJECT);
   //echo $myArray[0];
   //$myArray = array_map('htmlentities',$myArray);
   //$json = html_entity_decode(json_encode($myArray));
   echo $json;
}
/*$result = mysqli_query($mysqli, $sql);
        $myArray = array();
        if ($result) {

            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
            }
            
            $contenu_json=json_encode($myArray);
            echo $contenu_json;*/
?>