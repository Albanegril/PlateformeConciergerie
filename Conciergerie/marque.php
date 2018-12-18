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

        <h4 class="titrePage">Fiche Marque</h4>
        <div class="row">
          <div class="card-panel grey lighten-5 col offset-l1 l8 s12" id="Marque" >

              <div class="row">
                <form>
                  <div class="input-field col s4 offset-s8">
                    <select>
                      <option value="" disabled selected>Choose the order</option>
                      <option value="1">By prize</option>
                      <option value="2">By accuracy</option>
                    </select>
                  </div>
                </form>
              </div>

              <div class="col s12 m12">
                <div class="card horizontal">
                  <div class="card-image">
                    <img src="images/scandal.jpeg">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p>Item 1</p>
                    </div>
                    <div class="card-action">
                      <a href="product.php">Link to page item</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m12">
                <div class="card horizontal">
                  <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p>Item 2</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Link to page item</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m12">
                <div class="card horizontal">
                  <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p>Item 3</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Link to page item</a>
                    </div>
                  </div>
                </div>
              </div>
            <!--
              <div class="col s12 m12 texte" id="texte">
                <div class="card horizontal">
                  <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <p>Item 4</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Link to page item</a>
                    </div>
                  </div>
                </div>
              </div>
            -->
          
        

          </div>
            <!--
            <a class="btn" id="bouton_texte" onclick="afficher_cacher('texte');">Afficher plus</a>
            -->

            <div class="fixed-action-btn" id="myBtn" onclick="topFunction()">
              <a class="btn-floating btn red">
                  <i class="large material-icons">arrow_drop_up</i>
              </a>
            </div>
          </div>
        </div>
      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading onclick="topFunction()" id="myBtn" title="Go to top"-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="extras/noUiSlider/nouislider.min.js"></script>
      <script type="text/javascript" src="js/topF.js"></script>
      <script type="text/javascript" src="js/afficherPlus.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>

      <script type="text/javascript">
      //<!--
          afficher_cacher('texte');
      //-->
      </script>
     
    </body>
  </html>
