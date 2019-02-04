<?php
include('BDopen.php');

if(isset($_POST['autocomplete-input']) && !empty($_POST['autocomplete-input'])){// && isset($_POST['change']) && !empty($_POST['change']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['marque']) && !empty($_POST['marque']) )
  $barre = htmlentities($_POST['autocomplete-input']);
  
  $sql = 'SELECT nom,itemCode FROM produit,Marque where nom='.$barre.';';
  $result = mysqli_query($mysqli, $sql);
  $myArray = array();
    if (mysqli_num_rows($result) == 0) {
      echo 'Pas de resultat';
      //Pseudo is incorrect
      //header('Location : ../login.php?err=1');
  } else {
      //Pseudo is correct
      
          header('Location:connexion.php');
      }
}
else{
 // echo "rien";
}

//TRAITEMENT RECHECHE  

  if(isset($_POST['Recherche'] )){

      $requete = "SELECT numProduitFinal, numfournisseur, nom, nomTypeProduit, originalPrice, quantiteVolume, typeVolume, originalPrice, imageMarque, imageFournisseur, imageProduit, device FROM fournisseur NATURAL JOIN produit NATURAL JOIN typeproduit NATURAL JOIN produitfinal NATURAL JOIN categorie NATURAL JOIN volume NATURAL JOIN marque WHERE ";

      if(isset($_POST['Prix']) && !empty($_POST['Prix'])){
          $prix =$_POST['Prix'];
          if($prix==1){
              $requete = $requete." originalPrice<=10 ";
          }
          if($prix==2){
              $requete = $requete." originalPrice>=10 AND originalPrice<=50 ";
          }
          if($prix==3){
              $requete = $requete." originalPrice>=50 AND originalPrice<=100 ";
          }
          if($prix==4){
              $requete = $requete." originalPrice>=100 AND originalPrice<=200 ";
          }
          if($prix==5){
              $requete = $requete." originalPrice>=200 ";
          }
      }
      else{
          $requete = $requete." originalPrice>=0 ";
      }

      if(isset($_POST['Type']) && !empty($_POST['Type'])){
          $type =$_POST['Type'];
          $requete = $requete." AND numTypeProduit =$type";
      }
      if(isset($_POST['Marque']) && !empty($_POST['Marque'])){
          $marque =$_POST['Marque'];
          $requete = $requete." AND numMarque=$marque";
      }
      if(isset($_POST['Shop']) && !empty($_POST['Shop'])){
          $shop =$_POST['Shop'];
          $requete = $requete." AND numFournisseur=$shop";
      }
      if(isset($_POST['Categorie']) && !empty($_POST['Categorie'])){
          $categorie =$_POST['Categorie'];
          $requete = $requete." AND numCategorie =$categorie";
      }
     
       // echo $requete;
       $resultat = $Connect->query($requete);
     
    }


    // AFFICHAGE DES RESULTATS RECHECHE 
        
        if (isset($result)){
          echo'
            <div id="Resultat" class="card-panel grey lighten-5">
              <div class="row">
                <form>
                  <div class="input-field col s3 offset-s8">
                    <select>
                      <option value="" disabled selected>Ordre</option>
                      <option value="1">Par prix</option>
                      <option value="2">Par pertinence</option>
                    </select>
                  </div>
                </form>
              </div>

              <div class="row Resultat">
            ';  

          while($row = mysqli_fetch_assoc($result)) {
             
            echo '
            <div class="col l6 s12">
              <a href="product.php?item='.$row['numProduitFinal'].'" class="black-text">
                <div class="card horizontal waves-effect waves-light">
                  <div class="card-image">
                    <img src="images/'.$row['imageProduit'].'">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                        <h6>'.$row['nom'].'</h6>
                        <p>'.$row['nomTypeProduit'].'</p>
                        <p>' .$row['quantiteVolume'].' '.$row['typeVolume'].' </p>
                        <p class="red-text">' .$row['originalPrice'].' '.$row['device'].'</p>
                    </div>
                    <div class="card-action">
                      <img id="imageR" src="images/'.$row['imageMarque'].'" alt="logo marque">
                      <img id="imageR" src="images/'.$row['imageFournisseur'].'" alt="logo fournisseur">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            '; 
          }
          echo'
            </div>
            ';
        }    
?>