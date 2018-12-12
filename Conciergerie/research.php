<h4 class="titrePage">Formulaire</h4>

<div id="Formulaire" class="card-panel grey lighten-5">
    <div class="row">
      <form  ><!-- method="post" action="traitementRecherche.php"-->
        <div class="row">

          <div class="row">
            <div class="col l6 offset-l3 s10 offset-s1">

                <div class="input-field col s12">
                  <i class="material-icons prefix" onchange="rechercherProduit()">search</i>
                  <input type="text" id="autocomplete-input" name="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Recherche ...</label>
                </div>

            </div>
          </div>
          <?php

          ?>

          <div class="row">

               <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Type" name="Type">
                  <option value="" disabled selected>Type</option>
                 
                  <option value="1">YSL</option>
                </select>
              </div>
            

              <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Marque" name="Marque">
                  <option value="" disabled selected>Marque</option>
                  <?php 
                
                include('php/database.fn.php');
                $sql = "SELECT * FROM marque;";
                $result = mysqli_query($mysqli, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                  <option value="<?php echo $data['numMarque'];?>"><?php echo $data['nomMarque'];?></option>
                  <?php } ?>
                </select>
              </div>

             <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Shop" name="Shop">
                  <option value="" disabled selected>Shop</option>
                  <?php 
                
                include('php/database.fn.php');
                $sql = "SELECT * FROM fournisseur;";
                $result = mysqli_query($mysqli, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                  <option value="<?php echo $data['numFournisseur'];?>"><?php echo $data['nomFournisseur'];?></option>
                  <?php } ?>
                </select>
              </div>

          </div>
            
      
          <div class="row">
            <div class="col l4 offset-l1 s12">
            <select multiple id="Categorie" name="Categorie">
                  <option value="" disabled selected>Categorie</option>
              
              <?php 
                
                include('php/database.fn.php');
                $sql = "SELECT * FROM categorie;";
                $result = mysqli_query($mysqli, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
              <option value="<?php echo $data['numCategorie'];?>"><?php echo $data['nomCategorie'];?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col l6 offset-l1 s12">
              <span>Prix</span>
              <div id="prix-slider"></div>  
            </div>
          </div>
    

          <div class="col offset-s5">
            <input type="submit" value="Recherche" name="Recherche" id="Recherche" class="waves-effect waves-light btn  yellow darken-2" onclick="rechercher()"/>
          </div>

        </form>
      </div>

    </div>

</div>

