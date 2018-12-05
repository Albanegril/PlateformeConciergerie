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
      <?php include_once ("initialisation.php"); ?>
      <?php include_once ("header.php"); ?>

          <div class="container">

              <div class="card-panel teal lighten-2"  id="Product">

                  <div class="row">
                   <div class="col offset-l1 l10 s12">

                    <div class="col l5 s12">
                      <div class="card-panel">
                            <img class="card-image" src="images/scandal.jpeg"  >
                      </div>
                    </div>

                    <div class="col l5 s10" >

                      <h4>Nom produit</h4>
                      <h6 class="white-text">code258-25</h6>
                    
                      <div class="Horizontale">  
                        <div>
                          <h5 class="red-text ">30,00€</h5>
                        </div>
                        
                        <div class="input-field new badge col l4 s4">
                          <select>
                            <option value="1">€</option>
                            <option value="2">$</option>
                            <option value="3">£</option>
                          </select>
                        </div>
                      </div> 

                      <div>
                        <ul class="collapsible ">
                          <li>
                              <div class="collapsible-header">Type : type</div>
                          </li>
                          <li>
                              <div class="collapsible-header">Catégories : Soins Jours, Soins Corps</div>
                          </li>
                          <li>
                              <div class="collapsible-header">Produit inclus</div>
                              <div class="collapsible-body"><span>juii</span></div>
                          </li>
                        </ul>
                      </div>

                    </div>

                    <div class="col l2 s2 margeTop" >
                      <div class="card-panel">
                        <a href="#">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                        </a> 
                      </div>
                            
                      <div class="card-panel">
                        <a href="fournisseur.php">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                        </a>
                      </div>     
                    </div> 
                  </div>

                  <div class="row">
                    <div class="card-panel col offset-l1 l10 s12">
                      <table class="">
                        <thead>
                            <tr>
                              <th>Original</th>
                              <th>Livaison</th>
                              <th>Discount</th>
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