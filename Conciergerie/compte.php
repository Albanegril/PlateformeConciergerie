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
        <div class="card-panel" id="Compte">
          <div class="row">
            <div class="col s10 offset-s1 l4 offset-l4">
              
            </div>
          </div>

          <h5>Hello Pseudo</h5>
          <h6>Name : name</h6>
          <hr/> <br>
          <form method="post" action="traitementMdp.php" class="formulaire">
            <h6>Change Password : </h6>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Current Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">New Password</label>
              </div>
            </div>
            <br>
            <div class="col offset-s5">
              <input type="submit" value="Valider" class="waves-effect waves-light btn"/>
            </div>
            
          </form>
               
        </div>
        
      </div>
          
          <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>