<div id="Resultat" class="card-panel grey lighten-5">
  <div class="row">
    <form>
      <div class="input-field col s3 offset-s8">
        <select>
          <option value="" disabled selected>Choose the order</option>
          <option value="1">By prize</option>
          <option value="2">By accuracy</option>
        </select>
      </div>
    </form>
  </div>

  <div class="row">
    <?php

      $Query="SELECT numProduitFinal, FROM produitfinal";
      $final  = $Connect->query($Query);

            while ($Data = mysqli_fetch_array($final)){
              $Query="SELECT numFournisseur, numVolume, numProduit, originalPrice FROM produitfinal WHERE numProduitFinal ='$final'";
              imageProduit, nom, / nomTypeProduit, / nomCategorie, / quantiteVolume, typeVolume, / originalPrice, / imageMarque, /imageFournisseur
              $item  = $Connect->query($Query);
          echo '
              <div class="col l6 s12">
                <a href="product.php?item='.$Data[0].'" class="black-text">
                  <div class="card horizontal waves-effect waves-light">
                    <div class="card-image">
                      <img src="images/'.$Data[4].'">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                          <h5>'.$Data[1].'</h5>
                          <p>'.$Data[2].'</p>
                          <p> Volume </p>
                          <p class="red-text"> Prix</p>
                      </div>
                      <div class="card-action">
                        <img id="image" src="images/vuitton.png" alt="logo marque">
                        <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              '; 
          }  
              
    ?>

    <div class="col l6 s12">
      <a href="product.php" class="black-text">
        <div class="card horizontal waves-effect waves-light">
          <div class="card-image">
            <img src="images/coco.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-content">
                <h5>Item 1</h5>
                <p>Type, Catégorie</p>
                <p class="red-text">Prix</p>
            </div>
            <div class="card-action">
              <img id="image" src="images/vuitton.png" alt="logo marque">
              <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col l6 s12">
      <a href="product.php" class="black-text">
        <div class="card horizontal waves-effect waves-light">
          <div class="card-image">
            <img src="images/coco.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-content">
                <h5>Item 1</h5>
                <p>Type, Catégorie</p>
                <p class="red-text">Prix</p>
            </div>
            <div class="card-action">
              <img id="image" src="images/vuitton.png" alt="logo marque">
              <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col l6 s12">
      <a href="product.php" class="black-text">
        <div class="card horizontal waves-effect waves-light">
          <div class="card-image">
            <img src="images/coco.jpg">
          </div>
          <div class="card-stacked">
            <div class="card-content">
                <h5>Item 1</h5>
                <p>Type, Catégorie</p>
                <p class="red-text">Prix</p>
            </div>
            <div class="card-action">
              <img id="image" src="images/vuitton.png" alt="logo marque">
              <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
            </div>
          </div>
        </div>
      </a>
    </div>

  </div>
<!--

        <div class="col s4 m3">
          <div class="card horizontal">
            <div class="card-image">
              <img src="images/coco.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p>card</p>
              </div>
              <div class="card-action">
                <a href="#">Link</a>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>

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

  <div class="col s12 m7">
    <a href="product.php">
    <div class="card horizontal">
      <div class="card-image">
        <img src="images/scandal.jpeg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <h5>Item 1</h5>
          <p>Type, Catégorie</p>
          <p>Prix</p>
        </div>
        <div class="card-action">
          <a href="#">
            <img id="image" src="images/vuitton.png" alt="logo marque">
          </a> 
          <a href="fournisseur.php">
            <img id="image" src="images/nocibe.jpg" alt="logo fournisseur">
          </a> 
        </div>
      </div>
    </div>
    </a>
  </div>

  <div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        
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
  </div>-->       
</div>