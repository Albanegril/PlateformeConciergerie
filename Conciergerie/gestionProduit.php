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

    <body class=" teal lighten-4">
      <?php include_once ("header.php"); ?>

          <div class="container">

              <div class="card-panel teal lighten-2"  id="Product">

                <h4>Fiche Ajout Produit</h4>

                <h6 class="white-text">code : genération auto</h6>

                <div class="card-panel">

                  <div class="input-field inline">
                      Nom produit<input id="Nom" type="text" class="validate" name="Nom">
                    </div>
     
                    <div class="input-field inline col s12">
                      Lien page Produit<input id="lien" type="url" class="validate"  name="lien">
                    </div>

                    <p>choisir marque</p>

                    <p>choisir fournisseur</p>

                    <div class="">
                      <p>Ajout image</p>

                      <div class="col s12">
                          <div class="file-field input-field">
                            <div class="btn-small bouton">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            <span>Parcourir</span>
                            <input id="affiche" type="file"  name="image">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" >
                            <label for="affiche">Image</label>
                            </div>
                          </div>
                      </div>
                    </div>
 
                        
                    <div class="input-field new badge col l4 s4">
                      <select>
                        <option value="1">€</option>
                        <option value="2">$</option>
                        <option value="3">£</option>
                      </select>
                    </div>

                  </div>

                  <div>
                    <ul class="collapsible ">
                      <li>
                          <div class="collapsible-header">Type : choisir dans la table</div>
                      </li>
                      <li>
                          <div class="collapsible-header">Catégories : ajouter avec chips ?</div>
                      </li>
                      <li>
                          <div class="collapsible-header">Produit inclus</div>
                          <div class="collapsible-body">
                            <div class="input-field col s12">
                            Texte descriptif<textarea id="descriptif" class="materialize-textarea"  name="details" ></textarea>
                            </div>
                          </div>
                      </li>
                    </ul>
                  </div>
                
                  <div class="row">
                    <div class="card-panel col offset-l1 l10 s12">
                      <table class="">
                        <thead>
                            <tr>
                              <th>Original</th>
                              <th>Livaison</th>
                              <th>Discount</th>
                            </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>52</td>
                            <td>25</td>
                            <td>36</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12 right-align">
                      <input type="submit" value="Ajouter" class="waves-effect waves-light btn" />
                    </div>
                  </div>

            </div>
          </div>     

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="extras/noUiSlider/nouislider.min.js"></script>

      <script>
        M.AutoInit();
      </script>

      <script>
        $(document).ready(function(){
          $('select').formSelect();
        });
      </script>
      <script>
          $(document).ready(function(){
            $('.collapsible').collapsible();
          });
      </script>
    </body>
  </html>