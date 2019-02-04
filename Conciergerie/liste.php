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
     
      <div class="container-fluid grey lighten-5">
        <div class="row">
          <div class="col offset-l1 l8 s12">

            <h4 class="titrePage">Liste Stock</h4>

              <div class="row Resultat">
                <?php
                    include('BDopen.php');
                      $sql = 'SELECT numProduitFinal, numfournisseur, nom, nomTypeProduit, originalPrice, quantiteVolume, typeVolume, originalPrice, imageMarque, imageFournisseur, imageProduit, device from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join categorie natural join volume natural join marque;';
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
                        }}
                          
                ?>

          </div>  

          <?php include_once ("panier.php"); ?>    
        </div>
      </div>

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.1.0/nouislider.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>

    </body>
  </html>
