<?php
if(isset($_POST['barre']) && !empty($_POST['barre']) && isset($_POST['change']) && !empty($_POST['change']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['marque']) && !empty($_POST['marque']) )
 //TRAITEMENT RECHECHE  
/*if(isset($_POST['Recherche'] )){
   
      $Autocomplet = $_POST['autocomplete-input'];
      if($Autocomplet !=''){   // si le produit existe alors on le recupère 
       // $Query="SELECT * FROM Jeux WHERE Nom='$Nom'";
      //  $jeux = $Connect->query($Query);

      }
      else { //regarder le reste

        if (isset($_POST['age'])) {
          $age = (int)$_POST['age'];  
        }
        else{
          $age = 0;
        }

        $requete = '';

        if ($_POST['nombre'] != 0) {
          $nombre = $_POST['nombre'];
          $requete = $requete." AND NbJoueur >=$nombre";
        }
        else{
          $requete = $requete." AND NbJoueur >=0";
        }

        if (isset($_POST['cartes'])) {
          $cartes = 1;
          $requete = $requete." AND Carte =$cartes";  
        }

        if (isset($_POST['plateau'])) {
          $plateau = 1; 
          $requete = $requete." AND Plateau =$plateau"; 
        }

        if (isset($_POST['ambiance'])) {
          $ambiance = 1; 
          $requete = $requete." AND Ambiance =$ambiance"; 
        }
        
        if (isset($_POST['reflexion'])) {
          $reflexion = 1; 
          $requete = $requete." AND Reflexion =$reflexion"; 
        }
      
        if (isset($_POST['familiale'])) {
          $familiale = 1; 
          $requete = $requete." AND Familial =$familiale"; 
        }

    //    $Query= "SELECT Nom, Illusration FROM Jeux WHERE AgeMin >= $age ".$requete;
       // echo $Query;
    //    $jeux = $Connect->query($Query);
     
      }
?>

<?php

    // AFFICHAGE DES RESULTATS RECHECHE 
      if (isset($jeux)) {
          
        while ($Data = mysqli_fetch_array($jeux)){

          echo '
              <div class="conteneur ">
                <form method="post" class="formulaire" id="jeu">
                  <a href="jeu.php?$jeu='.$Data[0].'"><img src="image/'.$Data[1].'" class="illusration" width="200px"></a>
                    <a href="jeu.php?$jeu='.$Data[0].'"><h3> '.$Data[0].' </h3></a>
                    <em class="'.siDispo($Data[0]).'">Dispo</em> <br/>
                    <br/><a href="reserver.php?jeu='.$Data[0].'" class="btn">RESERVER</a>
                  </form>
              </div>
          ';
        }*/
        
?>