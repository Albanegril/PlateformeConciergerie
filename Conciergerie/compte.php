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
      <?php 
        if (isset($_SESSION['login'])) {
            $login = htmlentities($_SESSION['login']);
        }
      ?>

      <div class="container">

        <h4 class="titrePage">Fiche Compte</h4>
        <div class="card-panel grey lighten-5" id="Compte">

          <div class="row">
            <h6>Hello <?php echo $login; ?></h6>
          </div>

          <div class="col l6 s12">
            <div class="card-content">

              <form method="post" action="traitementMdp.php" class="formulaire col offset-l1">
                <ul class="collapsible">
                  <li>
                    <div class="collapsible-header"><span>Modifier le mot de passe : </span></div>
                    <div class="collapsible-body">
                      <div class="input-field col s12">
                        <input id="passwordactu" name="passwordactu" type="password" class="validate">
                        <label for="passwordactu">Mot de passe actuel</label>
                      </div>

                      <div class="input-field col s12">
                        <input id="passwordnew" name="passwordnew" type="password" class="validate">
                        <label for="passwordnew">Nouveau mot de passe</label>
                      </div>

                      <div class="col offset-s5">
                        <input type="submit" value="Valider" class="waves-effect waves-light btn yellow darken-2"/>
                      </div>
                    </div>
                  </li>
                </ul>      
              </form>
              
            </div>
          </div>
               
        </div>
        
      </div>
          
      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
    </body>
  </html>