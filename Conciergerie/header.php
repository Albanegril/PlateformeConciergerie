  <header>
    <nav class="deep-orange darken-4" >
      <div class="nav-wrapper ">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="150px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Recherche</a></li>
        <?php 
        session_start();
        if (isset($_SESSION['id'])) { ?>
          <li><a href="gestionProduit.php">GestionProduit</a></li>
          <li><a href="compte.php">Compte</a></li>
          <li><a href="traitementDeconnexion.php" class="waves-effect waves-light btn yellow darken-2">DECONNEXION</a></li>
        <?php } else { ?>
          <li><a href="connexion.php" class="waves-effect waves-light btn yellow darken-2">CONNEXION</a></li>
        <?php } ?>
        </ul>
      </div>
    </nav>
  </header>
