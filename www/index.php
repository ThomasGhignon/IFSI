<?php
require_once('module/config.php');
require_once('module/init.php');
$request = $bdd->query('DELETE FROM `preco_message`; ALTER TABLE `preco_message` AUTO_INCREMENT=0');
$request = $bdd->query('DELETE FROM `time_update`; ALTER TABLE `time_update` AUTO_INCREMENT=0');
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
      <a href="http://<?php echo($ipLocal); ?>/IFSI/www/admin.php">Admin</a>
    </div>
    <div class="wrap">
      <div class="errorMessage_container"></div>
      <div class="title">
        <h1>escape game ifsi</h1>
        <div></div>
      </div>
      <div class="main">
        <p>Entrez le nom de votre service :</p>
        <form class="main" action="" method="POST">
          <input class="input" name="sessionName" type="text" placeholder="ex : Equipe 51">
          <input type="submit" value="Commencer">
        </form>
      </div>
    </div>
  </header>
  <script src="js/libs/jquery.js"></script>
  <script src="js/error.js"></script>
  <script src="js/start.js"></script>
  <script>
    start_verif("<?php echo($ipLocal); ?>");
  </script>
</body>
</html>

