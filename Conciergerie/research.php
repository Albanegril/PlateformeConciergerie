<div id="Formulaire" class="Formulaire">
  <h4>Forms</h4>

    <div class="row">
      
      <form method="post" action="traitement.php">
        <div class="row">
          <div class="col s6 offset-s3">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Recherche ...</label>
              </div>
            </div>
          </div>
        </div>

        <div id="prix-slider"></div>

        <div class="row">
          <div class="input-field col s2 offset-s1">
            <select class="browser-default">
              <option value="" disabled selected>Change</option>
              <option value="1">Dollars</option>
              <option value="2">Euros</option>
            </select>
          </div>

          <div class="input-field col s2 offset-s1">
            <select class="browser-default">
              <option value="" disabled selected>Type</option>
              <option value="1">Dior</option>
              <option value="2">YSL</option>
            </select>
          </div>
        

          <div class="input-field col s2 offset-s1">
            <select class="browser-default">
              <option value="" disabled selected>Brand</option>
              <option value="1">Dior</option>
              <option value="2">YSL</option>
            </select>
          </div>

         <div class="input-field col s2 offset-s1">
            <select class="browser-default">
              <option value="" disabled selected>Shop</option>
              <option value="1">Sephora</option>
              <option value="2">Nocibé</option>
            </select>
          </div>

          <div class="col offset-s5">
            <input type="submit" value="Research" class="waves-effect waves-light btn BtnSearch"/>
          </div>
        </form>
      </div>

    </div>

</div>