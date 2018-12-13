<?php
include('../BDopen.php');

$sql = 'SELECT * FROM produit;';
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