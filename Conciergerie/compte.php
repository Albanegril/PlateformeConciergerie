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
<br>
        <div class="card-panel teal lighten-2" id="Compte">
          <div class="row">
            <h5>Hello Pseudo</h5>
            <p>Name : name</p>
          </div>

          <div class="card col l6 s12">
            <div class="card-content">

              <form method="post" action="traitementMdp.php" class="formulaire col offset-l1">

                <span>Change Password : </span>

                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Current Password</label>
                </div>

                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">New Password</label>
                </div>

                <div class="col offset-s5">
                  <input type="submit" value="Valider" class="waves-effect waves-light btn"/>
                </div>
                
              </form>
              
            </div>
          </div>
               
        </div>
        
      </div>
          
          <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>