<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.1.0/nouislider.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

    </head>

    <body class="">
      <?php include_once ("BDopen.php"); ?>
      <?php include_once ("header.php"); ?>
     
      <div class="container-fluid">
        <div class="row">
          <div class="col offset-l1 l8 s12">
            <?php include_once ("research.php"); ?>
        
          </div>  

          <?php include_once ("panier.php"); ?>    
        </div>
      </div>

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>

    </body>
  </html>