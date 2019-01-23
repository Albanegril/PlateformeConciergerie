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

        
        <ul class="card-panel grey lighten-5">
          <li>
                      
            <div class="row">
              <div class="col s12">
             
                <ul class="tabs">
                  <li class="tab col s6"><a class="active" href="#Commande">Panier</a></li>
                  <li class="tab col s6"><a href="#Client">Client</a></li>
                </ul>
                
              </div>
            </div>
           
           
            <div class="" id="Commande">

              <ul class="collection">
                <li class="collection-item"><span class="badge">prix €</span>Nom Produit</li>
                <li class="collection-item"><span class="badge">prix €</span>Nom Produit</li>
                <li class="collection-item active black-text yellow darken-2"><span> TOTAL </span></li>
              </ul>

              
              <a href="commander.php"><input type="submit" value="Commander" name="commander" id="commander" class="waves-effect waves-light btn yellow darken-2" /></a>

            </div>

            <div class="" id="Client">

              <p>Nom</p>
              <p>Numéro</p>
            
              <input type="submit" value="Changer" name="changerclient" id="changerclient" class="waves-effect waves-light btn yellow darken-2" />
                      
            </div>
           
          </li>
        </ul>    

      </div>
          
      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
    </body>
  </html>