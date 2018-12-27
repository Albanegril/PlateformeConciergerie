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
      <?php include_once ("header.php"); ?>

        <div class="container-fluid">

          <h4 class="titrePage">Fiche Commande</h4>
          <div class="row">
            <div class="card-panel grey lighten-5 col offset-l1 l8 s12">

              <div class="row">

                <div class="col offset-l1 l10 s12" id="infoClient">
                  <br>
                  <div class="row">
                    <span>Client : </span>

                    <span class="badge"><a class="btn-floating btn-large waves-effect waves-light yellow darken-2" align="right"><i class="material-icons">edit</i></a></span>
                    <div class="collection">
                      <div class="collection-item">
                        <p>Nom</p>
                        <p>Numéro</p>
                      </div>

                    </div>
                                       
                  </div>
                </div>

                <div class="col offset-l1 l10 s12" id="recapCommande">
                  <div class="row">
                    <span>Num Commande : </span>
                    
                    <span class="badge"><a class="btn-floating btn-large waves-effect waves-light yellow darken-2" align="right"><i class="material-icons">shopping_basket</i></a></span>
                    
                  </div>
                    
                    <div class="row">
                        <ul class="collection">
                          <li class="collection-item">
                            <table class="responsive-table">
                              <thead>
                                <tr>
                                  <th>Nom Produit</th>
                                  <th>Code</th>
                                  <th>Quantité</th>
                                  <th>Prix</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td>Nom item</td> 
                                  <td>num</td>
                                  <td>1</td>  
                                  <td>30,00 €</td> 
                                </tr>
                                <tr>
                                  <td>Nom item</td> 
                                  <td>num</td> 
                                  <td>1</td> 
                                  <td>30,00 €</td> 
                                </tr>
                                <tr>
                                  <td>Nom item</td> 
                                  <td>num</td> 
                                  <td>1</td> 
                                  <td>30,00 €</td> 
                                </tr>
                              </tbody>
                            </table>
                          </li>
                          <li class="collection-item active black-text yellow darken-2"><span class="align-right yellow darken-2"> TOTAL </span></li>
                        </ul> 
                    </div>

                </div>

                <div class="col offset-l1 l10 s12" id="recapFidelite">
                  <div class="row">
                    <span>Points de Fidélité : .. nombre de points </span>
                    <span class="badge"><a class="waves-effect waves-light btn black-text yellow darken-2 modal-trigger" href="#modalUtiliser">Utiliser</a></span>
                  </div>
                    
                    <div class="row hide">
                        <ul class="collection">
                          <li class="collection-item"><span>Nom Produit</span><span class="badge"> nb points</span></li>
                          <li class="collection-item active black-text yellow darken-2"><span> TOTAL points utilisés </span></li>
                        </ul>
                    </div>
                </div>

                <div class="col offset-l1 l10 s12">
                  <a href="commander.php"><input type="submit" value="Valider" name="validercommande" id="validercommande" class="waves-effect waves-light btn yellow darken-2" /></a>
                </div>
                
              </div>
            </div>
            <?php include_once ("panier.php"); ?>   
          </div>
        </div> 

        <div class="modal" id="modalUtiliser">
          <div class="modal-content">
            <h6>Choisir un ou des produits <span class=" text-red badge">nb points</span></h6>
            <table class="responsive-table">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Code</th>
                  <th>Valeur</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Nom item</td> 
                  <td>num</td> 
                  <td>3000 pts</td> 
                </tr>
                <tr>
                  <td>Nom item</td> 
                  <td>num</td> 
                  <td>3000 pts</td> 
                </tr>
                <tr>
                  <td>Nom item</td> 
                  <td>num</td> 
                  <td>3000 pts</td> 
                </tr>
              </tbody>
            </table> 
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Valider</a>
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