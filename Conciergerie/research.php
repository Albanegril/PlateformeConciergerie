<h4 class="titrePage">Formulaire</h4>

<div id="Formulaire" class="card-panel blue-grey lighten-1">
    <div class="row">
      <form  ><!-- method="post" action="traitementRecherche.php"-->
        <div class="row">

          <div class="row">
            <div class="col l6 offset-l3 s10 offset-s1">
              <div class="card horizontal">
                <div class="input-field col s12">
                  <i class="material-icons prefix" onchange="rechercherProduit()">search</i>
                  <input type="text" id="autocomplete-input" name="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Recherche ...</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="card horizontal">

              <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Change" name="Change">
                  <option value="" disabled selected>Change</option>
                  <option value="1">Dollars</option>
                  <option value="2">Euros</option>
                </select>
              </div>

              <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Type" name="Type">
                  <option value="" disabled selected>Type</option>
                  <option value="1">Dior</option>
                  <option value="2">YSL</option>
                </select>
              </div>
            

              <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Marque" name="Marque">
                  <option value="" disabled selected>Marque</option>
                  <option value="1">Dior</option>
                  <option value="2">YSL</option>
                </select>
              </div>

             <div class="input-field col l2 offset-l1 s5 offset-l1">
                <select multiple id="Shop" name="Shop">
                  <option value="" disabled selected>Shop</option>
                  <option value="1">Sephora</option>
                  <option value="2">Nocibé</option>
                </select>
              </div>

            </div>

          </div>
            
      
          <div class="row">
            <div class="card horizontal">

              <div class="col l4 s12">
                <span>Catégorie</span>
                 <div class="chips chips-autocomplete chips-placeholder"></div>
              </div>

              <div class="col l6 s12">
                <span>Prix</span>
                <div id="prix-slider"></div>  
              </div>

            </div>
          </div>
    

          <div class="col offset-s5">
            <input type="submit" value="Recherche" name="Recherche" id="Recherche" class="waves-effect waves-light btn  yellow darken-2" onclick="rechercher()"/>
          </div>

        </form>
      </div>

    </div>

</div>

