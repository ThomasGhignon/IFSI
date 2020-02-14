<?php
require_once('module/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon & Thomas Burgard">
  <title>Accueil</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
</head>
<body>
  <header>
    <div class="wrap">
      <video src="videos/debrief.mp4" class="videoSetup" autoplay="true"></video>
    </div>
    <div class="buttonVideo">
      <a href="http://<?php echo($ipLocal); ?>/IFSI/www/finalPage_win.php">Statistiques</a>
    </div>
  </header>
</body>
</html>
