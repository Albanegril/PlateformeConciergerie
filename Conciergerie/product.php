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

        <div class="container-fluid">
          <h4 class="titrePage">Fiche Produit</h4>
          <div class="row">

          <?php

        $item = $_GET['item'];

        if(isset($item))
        {

          $Query="SELECT nom, imageProduit, typeVolume, quantiteVolume, numMarque, imageMarque, numFournisseur, imageFournisseur, nomTypeProduit, nomCategorie, produitsInclus, URLProduit, device, originalPrice, saving, shipping, discount FROM produitfinal NATURAL JOIN produit NATURAL JOIN typeproduit NATURAL JOIN categorie NATURAL JOIN typeproduitcategorie NATURAL JOIN marque NATURAL JOIN fournisseur NATURAL JOIN volume WHERE numProduitFinal='$item' GROUP BY nom;";
              $produit  = $Connect->query($Query);
              $Data = mysqli_fetch_array($produit);
          
                echo '
            <div class="card-panel grey lighten-5 col offset-l1 l8 s12"  id="Product">

                <span class="badge"><a class="btn-floating btn-large waves-effect waves-light yellow darken-2" align="right"><i class="material-icons">shopping_basket</i></a></span>
              <div class="row">

                <div class="col offset-l1 l10 s12">
                  
                  <div class="col l5 s12">
                    <img class="card-image" src="images/'.$Data[1].'">
                  </div>

                  <div class="col l7 s10" >
                    <h4>'.$Data[0].'</h4>
                    <h6>code à créer </h6> 

                    <form action="#" class="col l5 s5"> <!-- A GENERER PAR JS-->
                      <p>
                        <label>
                          <input name="volumes" type="radio" checked />
                          <span>'.$Data[3].' '.$Data[2].'</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="volumes" type="radio" />
                          <span>10O ml</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="volumes" type="radio"  />
                          <span>15O ml</span>
                        </label>
                      </p>
                    </form>

                    <div class="col l2  s6 margeTop">
                      <a href="marque.php?item='.$Data[4].'">
                        <img id="image" src="images/'.$Data[5].'" alt="logo marque">
                      </a> 
                    </div>
                      
                    <div class="col l2 offset-l2 s6 margeTop">
                      <a href="fournisseur.php?item='.$Data[6].'">
                        <img id="image" src="images/'.$Data[7].'" alt="logo fournisseur">
                      </a>
                    </div> 
                  
                  </div>

                </div>

                <div class="row">
                  <div class="col l10 offset-l1 s12">
                    <ul class="collection">
                      <li class="collection-item">Type : <span class="badge">'.$Data[8].'</span></li>
                      <li class="collection-item">Catégories : <span class="badge">'.$Data[9].'</span> <span class="badge">Soins Corps</span></li>
                      <li class="collection-item">Produits inclus : <span class="badge">'.$Data[10].'</span></li>
                    </ul>
                  </div>
                </div>

                <div class="row">
                  <div class="col offset-l1 l10 offset-s2 s10">
                    <table class="responsive-table">
                      <thead>
                          <tr>
                            <th>Original</th>
                            <th>Saving</th>
                            <th>Shipping</th>
                            <th>Discount</th>
                            <th>AfterDiscount</th>
                          </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>'.$Data[13].' '.$Data[12].'</td> 
                          <td>'.$Data[14].' '.$Data[12].'</td> 
                          <td>'.$Data[15].' '.$Data[12].'</td>
                          <td>'.$Data[16].' '.$Data[12].'</td>
                          <td class="yellow darken-2"><h6>30,00 '.$Data[12].'</h6></td> <!-- A CALCULER !-->
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>

              <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><span>Personnaliser / Comparer</span></div>
                  <div class="collapsible-body">
                    <div class="row">
                      <div class="col l4 s12">
                        <div class="row">
                          <form method="post" action="traitementAffichageProduit.php" class="formulaire col offset-l1">
                          <div class="input-field ">
                            <input id="marge" name="marge" type="number" step="0.001" value="Marge" class="validate">
                            <label for="marge">Marge</label>
                          </div>
                          <div class="col offset-s5">
                            <input type="submit" value="Appliquer" class="waves-effect waves-light btn yellow darken-2"/>
                          </div>
                        </form>
                        </div>
                        
                      </div>
                        

                      <div class="col l8 offset-s2 s10">
                        <table class="responsive-table">
                          <thead>
                              <tr>
                                <th>Nom Concurrence</th>
                                <th>Prix Min</th>
                                <th>Remise Fournisseur</th>
                                <th>Promotion</th>
                              </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>..</td> 
                              <td>..</td> 
                              <td>..</td>
                              <td>..</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    

                  </div>
                </li>
              </ul>      
            

            </div>
                    ';
        }
      ?>
            
            <?php include_once ("panier.php"); ?>   
          </div>
        </div>     

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="extras/noUiSlider/nouislider.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
      
    </body>
  </html>