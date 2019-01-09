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

          $Query="SELECT nomMarque, imageMarque FROM marque WHERE numMarque= '$item';";
              $produit  = $Connect->query($Query);
              $Data = mysqli_fetch_array($produit);
          
                echo '

        <h4 class="titrePage">Fiche Marque : '.$Data[0].' <br> <img id="image" src="images/'.$Data[1].'" alt="logo marque"></h4>
        <div class="row">

          <div class="card-panel grey lighten-5" id="Marque" >
            <div class="row">
              <div class="col l6 s12">
                <a href="product.php" class="black-text">
                  <div class="card horizontal waves-effect waves-light">
                    <div class="card-image">
                      <img src="images/coco.jpg">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                          <h5>Item 1</h5>
                          <p>Type, Catégorie</p>
                          <p class="red-text">Prix</p>
                      </div>
                      <div class="card-action">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col l6 s12">
                <a href="product.php" class="black-text">
                  <div class="card horizontal waves-effect waves-light">
                    <div class="card-image">
                      <img src="images/coco.jpg">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                          <h5>Item 1</h5>
                          <p>Type, Catégorie</p>
                          <p class="red-text">Prix</p>
                      </div>
                      <div class="card-action">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col l6 s12">
                <a href="product.php" class="black-text">
                  <div class="card horizontal waves-effect waves-light">
                    <div class="card-image">
                      <img src="images/coco.jpg">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                          <h5>Item 1</h5>
                          <p>Type, Catégorie</p>
                          <p class="red-text">Prix</p>
                      </div>
                      <div class="card-action">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

            <div class="fixed-action-btn" id="myBtn" onclick="topFunction()">
              <a class="btn-floating btn red">
                  <i class="large material-icons">arrow_drop_up</i>
              </a>
            </div>
          </div>
          ';
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
