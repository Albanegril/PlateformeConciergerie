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

              <h4 class="titrePage">Fiche Gestion Marque</h4>

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
                <form method="post" action="traitementAjoutMarque.php">
                
                <h6>code : genération auto</h6><br> <!-- comment le générer ??--> 

                  <div class="row">
                    <div class="input-field inline col l6 s12">
                      Nom Marque<input id="nom" type="text" class="validate" name="nom">
                    </div>
       
                    <div class="input-field inline col l6 s12">
                      Lien page Marque<input id="lien" type="url" class="validate"  name="lien">
                    </div>
                  </div>

                  <div class="col l6 s12">
                      <div class="input-field">
                        Illustration<input id="illustration" name="illustration" type="text" class="validate">
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
            <form method="post" action="traitementModifiMarque.php">
                <div class="row">
                  <div class="input-field col l6 s12">
                    Choisir un Code Marque <input id="nom" type="text" class="validate" name="Nom">
                  </div>
                  <div class="input-field col l6 s12">
                    <select>
                      <option value="" disabled selected>Choisir une Marque</option>
                      <?php                         
                      $sql = "SELECT * FROM marque;";
                      $result = mysqli_query($Connect, $sql);
                      while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                      <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col l6 s12">
                      <div class="input-field">
                         Illustration<input id="illustration" name="illustration" type="text" class="validate">
                      </div>
                  </div>
                  <div class="input-field inline col l6 s12">
                    Lien page Marque<input id="lien" type="url" class="validate"  name="lien">
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
            <form method="post" action="traitementSuppMarque.php">
              
                <div class="input-field col l6 offset-l3 s12">
                  Choisir un Code Marque <input id="nom" type="text" class="validate" name="Nom">
                </div>
                <div class="input-field col l6 offset-l3 s12">
                  <select>
                    <option value="" disabled selected>Choisir une Marque</option>
                    <?php                         
                    $sql = "SELECT * FROM marque;";
                    $result = mysqli_query($Connect, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                    <?php } ?>
                  </select>
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
      <script type="text/javascript" src="js/myscript.js"></script>

   
    </body>
  </html>