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

          <h4 class="titrePage">Fiche Produit</h4>
          <div class="row">
            <div class="card-panel grey lighten-5 col offset-l1 l8 s12"  id="Product">

              <div class="row">
                <div class="col offset-l1 l10 s12">

                  <div class="col l5 s12">
                    <img class="card-image" src="images/scandal.jpeg"  >
                  </div>

                  <div class="col l5 s10" >
                    <h4>Nom produit</h4>
                    <h6>code258-25</h6> 

                    <form action="#" class="col l5 s5">
                      <p>
                        <label>
                          <input name="volumes" type="radio" checked />
                          <span>5O ml</span>
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

                    <div class="col l2 offset-l1 s6 margeTop">
                      <a href="marque.php">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                      </a> 
                    </div>
                      
                    <div class="col l2 offset-l1 s6 margeTop">
                      <a href="fournisseur.php">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                      </a>
                    </div> 
                  
                  </div>

                </div>

                <div class="row">
                  <div class="col l10 offset-l1 s12">
                    <ul class="collection">
                      <li class="collection-item">Type : <span class="badge">Type</span></li>
                      <li class="collection-item">Catégories : <span class="badge">Soins Jours</span> <span class="badge">Soins Corps</span></li>
                      <li class="collection-item">Produits inclus : <span class="badge">Description</span></li>
                    </ul>
                  </div>
                </div>

                <div class="row">
                  <div class="col offset-l1 l10 s12">
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
                          <td>52,00 €</td> 
                          <td>25,00 €</td> <!-- ajouter la monnaie de base grace à la BD -->
                          <td>00,00 €</td>
                          <td>22,00 €</td>
                          <td><h6 class="red-text ">30,00€</h6></td> 
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
                            <input id="marge" name="marge" type="number" step="0.001" class="validate">
                            <label for="marge">Marge</label>
                          </div>
                          <div class="col offset-s5">
                            <input type="submit" value="Appliquer" class="waves-effect waves-light btn"/>
                          </div>
                        </form>
                        </div>
                        
                      </div>
                        

                      <div class="col l8 s12">
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