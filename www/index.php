<?php
session_start();
require_once('module/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Accueil</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_index.css">
  <link rel="stylesheet" href="css/style_global.css">
</head>
<body>

  <header>
    <div class="connectionAdmin">
      <img src="img/settings.svg" alt="parametre">
      <a href="http://localhost/IFSI/www/connectionAdmin.php">Admin</a>
    </div>
    <div class="wrap">
      <div class="errorMessage_container"></div>
      <div class="title">
        <h1>escape game ifsi</h1>
        <div></div>
      </div>
      <div class="main">
        <p>Entrez le nom de votre service :</p>
        <!-- http://localhost/IFSI/www/page2NbDoc.php -->
        <form class="main" action="">
          <input class="input" type="text" placeholder="ex : Equipe 51">
          <input type="submit" value="Commencer">
        </form>
      </div>
    </div>
  </header>
  <script src="js/libs/jquery.js"></script>
  <script src="js/error.js"></script>
  <script src="js/start.js"></script>
  <script>
    start_verif("<?php echo($ipLocal); ?>","page2NbDoc");
  </script>
</body>
</html>

