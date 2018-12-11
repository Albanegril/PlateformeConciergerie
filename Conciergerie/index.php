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

    <body class="grey lighten-5">
      
      <?php include_once ("header.php"); ?>

      <div class="container">
        <br>
        <?php include_once ("research.php"); ?>
        <br>

        <?php include_once ("resultat.php"); ?>
      </div>

      <?php include_once ("footer.php"); ?>

     <!--JAVASCRIPT-->
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.1.0/nouislider.min.js"></script>
      <script type="text/javascript" src="js/index.js"></script>


      <script>
        $(document).ready(function(){
          $('select').formSelect();
        });
      </script>
      <!--Script pour autocomplete-->
      <script>
      $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Gucci": null,
        "Laurent": null,
        "Google": 'https://placehold.it/250x250'
      },
    });
  });</script>

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
         }
        // format: wNumb({
         //  decimals: 0
         //})
        });
      </script>

      <script>
        //collapsible dans product.php
          $(document).ready(function(){
            $('.collapsible').collapsible();
          });
      </script>

      <script type="text/javascript">
        //chips autocomplet Catégories dans research.php
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.chips');
          var instances = M.Chips.init(elems, options);
        });

        var chip = {
          tag: 'chip content',
          image: '', //optional
        };
      
      </script>

    </body>
  </html>