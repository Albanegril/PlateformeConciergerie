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
      <?php include_once ("BDopen.php"); ?>


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
              <form method="post" action="traitementAjoutProduit.php">
                
                <h6>code : genération auto</h6><br> <!-- comment le générer ??--> 

                  <div class="row">
                    <div class="input-field inline col l6 s12">
                      Nom produit<input id="nom" type="text" class="validate" name="Nom">
                    </div>
       
                    <div class="input-field inline col l6 s12">
                      Lien page Produit<input id="lien" type="url" class="validate"  name="lien">
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col l6 s12">
                      <select name="marque" id="marque">
                        <option value="" disabled selected>Marque</option>
                        <?php                         
                        $sql = "SELECT * FROM marque;";
                        $result = mysqli_query($mysqli, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="input-field col l6 s12">
                      <select name="fournisseur" id="fournisseur">
                        <option value="" disabled selected>Fournisseur</option>
                        <?php                         
                        $sql = "SELECT * FROM fournisseur;";
                        $result = mysqli_query($mysqli, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numFournisseur'];?>"><?php echo $data['nomFournisseur'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col l6 s12">
                        <div class="file-field input-field">
                          <div class="btn-small yellow darken-2 black-text">
                          <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                          <span>Parcourir</span>
                          <input id="illustration" type="file"  name="illustration">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" >
                          <label for="illustration">Illustration</label>
                          </div>
                        </div>
                    </div>

                    <div class="input-field new badge col l3 s6">
                      <select name="device" id="device">
                        <option value="1">€</option>
                        <option value="2">$</option>
                        <option value="3">£</option>
                      </select>
                    </div>
                    <div class="input-field new badge col l3 s6"> 
                      <input id="volume" name="volume" type="text" class="validate">
                      <label for="volume">Volume :</label>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col l10 offset-l1 s12 ">
                      <ul class="collection">
                        <li class="collection-item"> 
                          <div class="input-field">
                            <input id="type" name="type" type="text" class="validate">
                            <label for="type">Type :</label>
                          </div>
                        </li>
                        <li class="collection-item">
                          <div class="input-field">
                            <input id="categories" name="categories" type="text" class="validate">
                            <label for="categories">Catégories :</label>
                          </div>
                        </li>
                        <li class="collection-item">
                          <div class="input-field col s12">
                            <label for="descriptif">Descriptif :</label><textarea id="descriptif" class="materialize-textarea"  name="descriptif" ></textarea>
                          </div>
                        </li>
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
                            <td><input id="originalP" type="number" step="0.001" class="validat col l10 s10"></td> 
                            <td><input id="savingP" type="number" step="0.001" class="validat col l10 s10"></td> 
                            <td><input id="shippingP" type="number" step="0.001" class="validat col l10 s10"></td>
                            <td><input id="discountP" type="number" step="0.001" class="validat col l10 s10"></td>
                            <td><input id="afterdiscountP" type="number" step="0.001" class="validat col l10 s10"></td> 
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12 right-align">
                      <input type="submit" value="Ajouter" name="ajouter" id="ajouter" class="waves-effect waves-light btn yellow darken-2" />
                    </div>
                  </div>
              </form>
              </div>

            <!-- MODIFIER -->
            <div class="card-panel grey lighten-5"  id="Modifier">
            <form method="post" action="traitementModifiProduit.php">
                    <div class="input-field col l6 offset-l3 s12">
                      <select>
                        <option value="" disabled selected>Choisir un code</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>

                  <div class="row">
                    <div class="input-field inline col l6 s12">
                      Nom produit<input id="nom" type="text" class="validate" name="Nom">
                    </div>
       
                    <div class="input-field inline col l6 s12">
                      Lien page Produit<input id="lien" type="url" class="validate"  name="lien">
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col l6 s12">
                      <select name="marque" id="marque">
                        <option value="" disabled selected>Marque</option>
                        <?php                         
                        $sql = "SELECT * FROM marque;";
                        $result = mysqli_query($mysqli, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="input-field col l6 s12">
                      <select name="fournisseur" id="fournisseur">
                        <option value="" disabled selected>Fournisseur</option>
                        <?php                         
                        $sql = "SELECT * FROM fournisseur;";
                        $result = mysqli_query($mysqli, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['numFournisseur'];?>"><?php echo $data['nomFournisseur'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col l6 s12">
                        <div class="file-field input-field">
                          <div class="btn-small yellow darken-2 black-text">
                          <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                          <span>Parcourir</span>
                          <input id="illustration" type="file"  name="illustration">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" >
                          <label for="illustration">Illustration</label>
                          </div>
                        </div>
                    </div>

                    <div class="input-field new badge col l3 s6">
                      <select name="device" id="device">
                        <option value="1">€</option>
                        <option value="2">$</option>
                        <option value="3">£</option>
                      </select>
                    </div>
                    <div class="input-field new badge col l3 s6"> 
                      <input id="volume" name="volume" type="text" class="validate">
                      <label for="volume">Volume :</label>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col l10 offset-l1 s12 ">
                      <ul class="collection">
                        <li class="collection-item"> 
                          <div class="input-field">
                            <input id="type" name="type" type="text" class="validate">
                            <label for="type">Type :</label>
                          </div>
                        </li>
                        <li class="collection-item">
                          <div class="input-field">
                            <input id="categories" name="categories" type="text" class="validate">
                            <label for="categories">Catégories :</label>
                          </div>
                        </li>
                        <li class="collection-item">
                          <div class="input-field col s12">
                            <label for="descriptif">Descriptif :</label><textarea id="descriptif" class="materialize-textarea"  name="descriptif" ></textarea>
                          </div>
                        </li>
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
                            <td><input id="originalP" type="number" step="0.001" class="validat col l10 s10"></td> 
                            <td><input id="savingP" type="number" step="0.001" class="validat col l10 s10"></td> 
                            <td><input id="shippingP" type="number" step="0.001" class="validat col l10 s10"></td>
                            <td><input id="discountP" type="number" step="0.001" class="validat col l10 s10"></td>
                            <td><input id="afterdiscountP" type="number" step="0.001" class="validat col l10 s10"></td> 
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12 right-align">
                      <input type="submit" value="Modifier" name="modifier" id="modifier" class="waves-effect waves-light btn yellow darken-2" />
                    </div>
                  </div>
              </form>
            </div>

            <!-- Supprimer -->
            <div class="card-panel grey lighten-5"  id="Supprimer">
            <form method="post" action="traitementSuppProduit.php">
              
                <div class="row">
                    <div class="col l6 offset-l3 s10 offset-s1">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">search</i>
                          <input type="text" id="autocomplete-input" name="autocomplete-input" class="autocomplete">
                          <label for="autocomplete-input">Recherche ...</label>
                        </div>
                    </div>
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
                    <input type="submit" value="Supprimer" name="supprimer" id="supprimer" class="waves-effect waves-light btn yellow darken-2" />
                  </div>
                </div>
              </form>
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