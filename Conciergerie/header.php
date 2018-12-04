<?php if (isset($_SESSION['num'])): ?>
    <nav>
      <div class="nav-wrapper navbar">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="100px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#Recherche">Recherche</a></li>
          <li><a href="#Resultats">Resultats</a></li>
          <li><a href="#Compte">Compte</a></li>
          <li><a href="deconnexion.php" class="waves-effect waves-light btn">DECONNEXION</a></li>
        </ul>
      </div>
    </nav>

<?php else: ?>
    <nav>
      <div class="nav-wrapper navbar">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="100px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#Recherche">Recherche</a></li>
          <li><a href="#Resultats">Resultats</a></li>
          <li><a href="#Compte">Compte</a></li>
          <li><a href="connexion.php" class="waves-effect waves-light btn" >CONNEXION</a></li>
        </ul>
      </div>
    </nav>

<?php endif ?>