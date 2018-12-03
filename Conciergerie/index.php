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

      <script type="text/javascript">
        M.AutoInit();
      </script>

      <script type="text/javascript">
          var slider = document.getElementById('prix-slider');
          noUiSlider.create(slider, {
           start: [20, 80],
           connect: true,
           step: 1,
           orientation: 'horizontal', // 'horizontal' or 'vertical'
           range: {
             'min': 0,
             'max': 100
           },
           format: wNumb({
             decimals: 0
           })
          });
      </script>


    </head>

    <body>
      <?php include_once ("header.php"); ?>
      <?php include_once ("navbar.php"); ?>

      <div class="container">
        <?php include_once ("recherche.php"); ?>
        <br>

        <?php include_once ("resultat.php"); ?>
      </div>

      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>