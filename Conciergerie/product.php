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
                  <div class="row">
                    <div class="col s4">
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
                    <div class="col s4">
                      <span>
                        <h5>Nom produit</h5>
                        <h4 class="grey-text">code258-25</h4>
                        <h3 class="red-text">30,00€</h3>
                        <ul class="collapsible brown lighten-4">
                          <li class="active">
                              <div class="collapsible-header">Type de produit</div>
                              <div class="collapsible-body"><span>juii</span></div>
                          </li>
                          <li>
                              <div class="collapsible-header">Produit inclus</div>
                              <div class="collapsible-body"><span>juii</span></div>
                          </li>
                        </ul>
                      
                      </span>

                      <div class="input-field">
                        <select>
                          <option value="1" disabled selected>Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                      </div>
                    </div> 
                    <div class="col s1">
                      <br>
                        <a href="#">
                        <!--<img src="">-->
                        <h9>logo marque</h9>
                      </a>            
                    </div>  
                    <div class="col s1">
                      <br>
                        <a href="#">
                        <!--<img src="">-->
                        <h9>logo fournisseur</h9>
                      </a>            
                    </div>   
                
                  <table>
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