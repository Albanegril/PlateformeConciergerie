<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

    </head>

    <body class="">
      <?php include_once ("BDopen.php"); ?>
      <?php include_once ("header.php"); ?>
      
      <div class="container">
        <?php

        $item = $_GET['item'];

        if(isset($item))
        {

          $Query="SELECT nomFournisseur, imageFournisseur FROM fournisseur WHERE numFournisseur= '$item';";
              $produit  = $Connect->query($Query);
              $Data = mysqli_fetch_array($produit);
          
                echo '

        <h4 class="titrePage">Fiche fournisseur : '.$Data[0].' <br> <img id="image" src="images/'.$Data[1].'" alt="logo fournisseur"></h4>
        <div class="row Resultat">

              <div class="fixed-action-btn" id="myBtn" onclick="topFunction()">
                <a class="btn-floating btn red">
                    <i class="large material-icons">arrow_drop_up</i>
                </a>
              </div>

          ';
        
        $sql = "SELECT numProduitFinal,numfournisseur,nom,nomTypeProduit,originalPrice,quantiteVolume,typeVolume,originalPrice,imageMarque,imageFournisseur,imageProduit,device from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join categorie natural join volume natural join marque WHERE numFournisseur= '$item';";
          $result = mysqli_query($Connect, $sql);
          if ($result) {

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
          }

          echo '</div>';

        }
      ?>
        </div>
      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading onclick="topFunction()" id="myBtn" title="Go to top"-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="extras/noUiSlider/nouislider.min.js"></script>
      <script type="text/javascript" src="js/topF.js"></script>
      <script type="text/javascript" src="js/afficherPlus.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>

      <script type="text/javascript">
      //<!--
          afficher_cacher('texte');
      //-->
      </script>
     
    </body>
  </html>
