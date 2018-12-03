<?php if (isset($_SESSION['num'])): ?>
    <header>
      <div class="container-fluid">
        <a href="index.php" align="left" class="logo" ><img src="images/Logo.png" alt="NotreLogo" width="200px"/></a>
        <a href="deconnexion.php" class="waves-effect waves-light btn">DECONNEXION</a>
      </div>
    </header>

<?php else: ?>
    <header>
      <div class="container-fluid">
        <a href="index.php" align="left" class="logo" ><img src="images/Logo.png" alt="NotreLogo" width="200px"/></a>
        <a href="connexion.php" class="waves-effect waves-light btn" >CONNEXION</a>
      </div>
    </header>

<?php endif ?>