  <header>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="gestionProduit.php">GestionProduit</a></li>
            <li><a href="gestionFournisseur.php">GestionShop</a></li>
            <li><a href="gestionMarque.php">GestionMarque</a></li>
          </ul>
    <nav class="deep-orange darken-4" >
      <div class="nav-wrapper ">
        <a href="index.php" class="brand-logo"><img src="images/Logo.png" alt="NotreLogo" width="150px"/></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php 
        session_start();
        if (isset($_SESSION['id'])) { ?>
          <li><a href="index.php">Recherche</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gestion Base de Données<i class="material-icons right">arrow_drop_down</i></a></li>        
          <li><a href="compte.php">Compte</a></li>
          <li><a href="traitementDeconnexion.php" class="waves-effect waves-light btn yellow darken-2">DECONNEXION</a></li>
        <?php } else { ?>
          <li><a href="connexion.php" class="waves-effect waves-light btn yellow darken-2">CONNEXION</a></li>
        <?php } ?>
        </ul>
      </div>
    </nav>
  </header>

<script>
  $(document).ready(function(){
    $(".dropdown-trigger").dropdown();  
  });
</script>