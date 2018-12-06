<?php if (isset($_SESSION['num'])): ?>
    <nav class="teal darken-4">
      <div class="nav-wrapper ">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="100px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Recherche</a></li>
          <li><a href="index.php">Resultats</a></li>
          <li><a href="compte.php">Compte</a></li>
          <li><a href="deconnexion.php" class="waves-effect waves-light btn">DECONNEXION</a></li>
        </ul>
      </div>
    </nav>

<?php else: ?>
    <nav class="teal darken-4">
      <div class="nav-wrapper ">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="100px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Recherche</a></li>
          <li><a href="gestionProduit.php">GestionProduit</a></li>
          <li><a href="compte.php">Compte</a></li>
          <li><a href="connexion.php" class="waves-effect waves-light btn" >CONNEXION</a></li>
        </ul>
      </div>
    </nav>

<?php endif ?>