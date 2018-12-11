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


          <div class="container">

              <h4 class="titrePage">Fiche Gestion Produit</h4>

              <div class="row">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s4"><a class="active" href="#Ajouter">Ajouter</a></li>
                    <li class="tab col s4"><a href="#Modifier">Modifier</a></li>
                    <li class="tab col s4"><a href="#Supprimer">Supprimer</a></li>
                  </ul>
                </div>
              </div>

              <!-- Ajouter -->
              <div class="card-panel grey lighten-5"  id="Ajouter">

                <h6>code : genération auto</h6><br>

                  <div class="row">
                    <div class="input-field inline col l6 s12">
                        Nom produit<input id="Nom" type="text" class="validate" name="Nom">
                    </div>
       
                    <div class="input-field inline col l6 s12">
                      Lien page Produit<input id="lien" type="url" class="validate"  name="lien">
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col l6 s12">
                      <select>
                        <option value="" disabled selected>Choisir une Marque</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>

                    <div class="input-field col l6 s12">
                      <select>
                        <option value="" disabled selected>Choisir un Fournisseur</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col l6 s12">
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

                    <div class="input-field new badge col l3 s6">
                      <select>
                        <option value="1">€</option>
                        <option value="2">$</option>
                        <option value="3">£</option>
                      </select>
                    </div>
                    <div class="input-field new badge col l3 s6"> <!-- choix =/= volumes-->
                      <select>
                        <option value="1">5O ml</option>
                        <option value="2">100 ml</option>
                        <option value="3">150 ml</option>
                      </select>
                    </div>

                  </div>

                <div class="row">
                  <div class="col l10 offset-l1 s12 ">
                    <ul class="collection">
                      <li class="collection-item"> 
                        <div class="input-field">
                          <input id="Type" type="text" class="validate">
                          <label for="Type">Type :</label>
                        </div>
                      </li>
                      <li class="collection-item">
                        <div class="chips chips-autocomplete" id="Catégories"></div>
                      </li>
                      <li class="collection-item">
                        <div class="input-field col s12">
                          Produits inclus : <textarea id="descriptif" class="materialize-textarea"  name="details" ></textarea>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                
                <div class="row">
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

                <div class="row">
                  <div class="col s12 right-align">
                    <input type="submit" value="Ajouter" class="waves-effect waves-light btn" />
                  </div>
                </div>

            </div>

            <!-- MODIFIER -->
            <div class="card-panel grey lighten-5"  id="Modifier">

                <div class="input-field col l6 s12">
                  <select>
                    <option value="" disabled selected>Choisir le code du produit</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
            
                <div class="row">
                  <div class="input-field inline col l6 s12">
                      Nom produit<input id="Nom" type="text" class="validate" name="Nom">
                  </div>
     
                  <div class="input-field inline col l6 s12">
                    Lien page Produit<input id="lien" type="url" class="validate"  name="lien">
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col l6 s12">
                    <select>
                      <option value="" disabled selected>Choisir une Marque</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>

                  <div class="input-field col l6 s12">
                    <select>
                      <option value="" disabled selected>Choisir un Fournisseur</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col l6 s12">
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

                  <div class="input-field new badge col l6 s12">
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

                <div class="row">
                  <div class="col s12 right-align">
                    <input type="submit" value="Modifier" class="waves-effect waves-light btn" />
                  </div>
                </div>

            </div>

            <!-- Supprimer -->
            <div class="card-panel grey lighten-5"  id="Supprimer">

              
                <div class="row">
                    <div class="col l6 offset-l3 s10 offset-s1">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">search</i>
                          <input type="text" id="autocomplete-input" name="autocomplete-input" class="autocomplete">
                          <label for="autocomplete-input">Recherche ...</label>
                        </div>
                    </div>
                  </div>

                  <div>
                    <p>Afficher les produits trouver, puis séléctionner le bon</p>
                  </div>

                  <div class="row">
                    <div class="input-field col l6 s12">
                      <select>
                        <option value="" disabled selected>Choisir un Nom produit</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>

                    <div class="input-field col l6 s12">
                      <select>
                        <option value="" disabled selected>Choisir un code</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>
                  </div>

                <div class="row">
                  <div class="col s12 right-align">
                    <input type="submit" value="Supprimer" class="waves-effect waves-light btn" />
                  </div>
                </div>

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