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
      <video src="videos/briefing.mp4" class="videoSetup" controls="" autoplay="true"></video>
    </div>
    <div class="buttonVideo">
      <p>Suite</p>
    </div>
  </header>
  <script src="js/libs/jquery.js"></script>
  <script src="js/ajaxPostProgress.js"></script>
  <script src="js/startCountdown.js"></script>
  <script>
    startCountdown("<?php echo($timestamp); ?>", "74", "<?php echo($ipLocal); ?>", "page2NbDoc");
  </script>
</body>
</html>

