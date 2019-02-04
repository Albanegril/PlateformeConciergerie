<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.1.0/nouislider.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

    </head>

    <body class="">
      <?php include_once ("BDopen.php"); ?>
      <?php include_once ("header.php"); ?>
     
      <div class="container-fluid">
        <div class="row">
          <div class="col offset-l1 l8 s12">
            <h4 class="titrePage">Formulaire Recherche</h4>

          <div id="Formulaire" class="card-panel grey lighten-5">
            <div class="row">
              
                <div class="row">
                  <div class="col l6 offset-l3 s10 offset-s1">

                      <div class="input-field col s12">
                        <i class="material-icons prefix" onchange="dataReserarch()">search</i>
                        <input type="text" id="autocomplete-input" name="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Recherche ...</label>
                      </div>

                  </div>
                </div>
              <form  method="post" action="index.php">
                <div class="row ResearchSelects">

                     <div class="input-field col l2 offset-l1 s5 offset-l1">
                      <select multiple id="Type" name="Type">
                        <option value="" disabled selected>Type</option>
                        <?php 
                        $sql = "SELECT * FROM typeproduit;";
                        $result = mysqli_query($Connect, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numTypeProduit'];?>"><?php echo $data['nomTypeProduit'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  

                    <div class="input-field col l2 offset-l1 s5 offset-l1">
                      <select multiple id="Marque" name="Marque">
                        <option value="" disabled selected>Marque</option>
                        <?php 
                        $sql = "SELECT * FROM marque;";
                        $result = mysqli_query($Connect, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                        <?php } ?>
                      </select>
                    </div>

                   <div class="input-field col l2 offset-l1 s5 offset-l1">
                      <select multiple id="Shop" name="Shop">
                        <option value="" disabled selected>Shop</option>
                        <?php 
                        $sql = "SELECT * FROM fournisseur;";
                        $result = mysqli_query($Connect, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numFournisseur'];?>"><?php echo $data['nomFournisseur'];?></option>
                        <?php } ?>
                      </select>
                    </div>

                </div>
                  
              
                <div class="row ResearchSelects"> 
                
                  <div class="input-field col l3 s5 offset-l1">
                    <select multiple id="Categorie" name="Categorie">
                      <option value="" disabled selected>Categorie</option>
                      <?php  
                        $sql = "SELECT * FROM categorie;";
                        $result = mysqli_query($Connect, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <option value="<?php echo $data['numCategorie'];?>"><?php echo $data['nomCategorie'];?></option>
                      <?php 
                        } 
                      ?>
                    </select>
                  </div> 

                  <div class="input-field col l3 offset-l1 s5 offset-l1"> 
                      <select>
                        <option value="" disabled selected>Prix</option>
                        <option value="1"> inf 10€ </option>
                        <option value="2"> de 10€ à 50€ </option>
                        <option value="3"> de 50€ à 100€</option>
                        <option value="4"> de 100€ à 200€</option>
                        <option value="5"> sup 200€</option>
                      </select>
                  </div>      

          <!--
                  <div class="col l5 offset-l1 s12">
                    <span>Prix</span>
                    <div id="prix-slider"></div>  
                  </div>
          -->
                </div>

                <div class="col offset-s5">
                  <input type="submit" value="Recherche" name="Recherche" id="Recherche" class="waves-effect waves-light btn yellow darken-2 black-text"/>
                </div>

              </form>

            </div>
          </div>

          <?php
          /*if(isset($_POST['autocomplete-input']) && !empty($_POST['autocomplete-input'])){// && isset($_POST['change']) && !empty($_POST['change']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['marque']) && !empty($_POST['marque']) )
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
          }*/

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
                  
              if (isset($resultat)){
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

                while($row = mysqli_fetch_assoc($resultat)) {
                   
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


        
          </div>  

          <?php include_once ("panier.php"); ?>    
        </div>
      </div>

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>

    </body>
  </html>