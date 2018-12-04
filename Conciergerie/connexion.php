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

    <body>

          <div class="container-fluid" id="Connexion">

            <div class="row">
              <div class="col s10 offset-s1 m3 offset-m6">

                <div class="card darken-1">
                  <div class="card-image">
                    <br>
                    <img src="images/user.png" width="100px">
                  </div>

                  <div class="card-content white-text">
                    <form method="post" action="traitementConnexion.php" class="formulaire">
                      <div class="input-field col">
                        <input id="pseudo" type="text" class="validate" name="pseudo">
                        <label for="pseudo">Pseudo</label>
                      </div>
                      <div class="input-field col">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                      </div>
                      <input type="submit" value="Connexion" class="waves-effect waves-light btn" />
                    </form>
                  </div>
                </div>

              </div>
            </div>
                 
          </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>