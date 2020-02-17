<?php
require_once('module/init.php');
require_once('module/config.php');
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Perdu !!!</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_finalPage_lose.css">
</head>
<body>

  <header>
    <div class="wrap">
      <h1>Perdu !!!</h1>
      <div class="linkRestart">
        <div>
          <a href="http://<?php echo($ipLocal); ?>/ifsi/www/">Rejouer</a>
        </div>
      </div>
    </div>
  </header>

  <script src="js/libs/jquery.js"></script>
</body>
</html>
