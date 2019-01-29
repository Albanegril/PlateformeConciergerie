<div id="Resultat" class="card-panel grey lighten-5">
  <div class="row">
    <form>
      <div class="input-field col s3 offset-s8">
        <select>
          <option value="" disabled selected>Ordre</option>
          <option value="1">Par prix</option>
          <option value="2">Par pertinence</option>
        </select>
      </div>
    </form>
  </div>

  <div class="row Resultat">
    <?php
        include('BDopen.php');
          $sql = 'SELECT numProduitFinal,numfournisseur,nom,nomTypeProduit,originalPrice,quantiteVolume,typeVolume,originalPrice,imageMarque,imageFournisseur,imageProduit,device from fournisseur natural join produit natural join typeproduit natural join produitfinal natural join categorie natural join volume natural join marque;';
          $result = mysqli_query($Connect, $sql);
          if ($result) {

            while($row = mysqli_fetch_assoc($result)) {
               
              echo '
              <div class="col l6 s12">
                <a href="product.php?item='.$row['numProduitFinal'].'" class="black-text">
                  <div class="card horizontal waves-effect waves-light">
                    <div class="card-image">
                      <img src="images/'.$row['imageProduit'].'">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                          <h6>'.$row['nom'].'</h6>
                          <p>'.$row['nomTypeProduit'].'</p>
                          <p>' .$row['quantiteVolume'].' '.$row['typeVolume'].' </p>
                          <p class="red-text">' .$row['originalPrice'].' '.$row['device'].'</p>
                      </div>
                      <div class="card-action">
                        <img id="imageR" src="images/'.$row['imageMarque'].'" alt="logo marque">
                        <img id="imageR" src="images/'.$row['imageFournisseur'].'" alt="logo fournisseur">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              '; 
            }}
              
    ?>
</div>
