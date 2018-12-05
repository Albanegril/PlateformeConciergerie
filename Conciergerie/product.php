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
      <?php include_once ("initialisation.php"); ?>
      <?php include_once ("header.php"); ?>

          <div class="container" id="Product">

              <div class="card-panel green lighten-4 alignement">
                  <div class="row" id="classrow">
                      <div class="col s5">
                      <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator card-image" src="images/scandal.jpeg"  ><!-- Image en 500px-->
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Description<i class="material-icons right">close</i></span>
                          <p>Le produit ...</p>
                        </div>
                      </div>
                    </div>
                    <div class="col s4 left-align" >
                      <div class="optionv">
                        <h5>Nom produit</h5>
                        <h6 class="grey-text">code258-25</h6>
                      </div>
                        <div class="row">
                          <div class="col s8">
                          <h5 class="red-text ">30,00€</h5></div>
                          <div class="input-field col s3 new badge" >
                            <select class="browser-default">
                              <option value="1" disabled selected>€</option>
                              <option value="2">$</option>
                              <option value="3">£</option>
                            </select>
                          </div>
                        </div>  
                        
                        <ul class="collapsible ">
                          <li>
                              <div class="collapsible-header">Type de produit</div>
                              <div class="collapsible-body"><span>juii</span></div>
                          </li>
                          <li>
                              <div class="collapsible-header">Produit inclus</div>
                              <div class="collapsible-body"><span>juii</span></div>
                          </li>
                        </ul>
                    </div>

                    <div class="col s2 optionv" >
                      <br>
                        <a href="marque.php">
                        <img id="image" src="images/vuitton.png" alt="logo marque" class="circle responsive-img">
                        </a>            
                        <br>
                        <a href="fournisseur.php">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur" class="circle responsive-img">
                        </a>      
                    </div>   


                  <div class="row">
                  <table class="table1 col s9 m9">
                    <thead>
                        <tr>
                          <th>Brut</th>
                          <th>Livaison</th>
                          <th>NetTask</th>
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