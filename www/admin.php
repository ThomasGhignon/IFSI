<?php
require_once('module/config.php');
require_once('module/init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Préconisations - Administrateur</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_admin.css">
  <!-- CSS -->
</head>
<body>
  <section class="leftContainer">
    <?php include 'module/sideBarreInclude.php'; ?>
  </section>
  <section class="middleContainer">
    <div class="main-carousel">
      <div class="carousel-cell wrapCarousel">
        <div>
          <div class="messageContainer" id="methodeMessage"></div>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div>
          <div class="messageContainer" id="materielMessage"></div>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div>
          <div class="messageContainer" id="maladeMessage"></div>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div>
          <div class="messageContainer" id="mainoeuvreMessage"></div>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div>
          <div class="messageContainer" id="milieuMessage"></div>
        </div>
      </div>
    </div>
  </section>
  <header class="rightContainer">
    <div class="typeM">
      <p>Méthode</p>
    </div>
    <div class="nav">
      <div>
        <p>Navigation</p>
      </div>
      <div class="button-group">
        <span class="button button_methode">Méthode</span>
        <span class="button button_materiel">Matériel</span>
        <span class="button button_malade">Matière / Malade</span>
        <span class="button button_mainoeuvre">Main d'oeuvre</span>
        <span class="button button_milieu">Milieu</span>
      </div>
    </div>
    <div class="advancement">
      <span>Réponses à valider : <span class="admin_goal">4</span></span>
    </div>
    <div class="legend">
      <span>Validé</span>
      <span>Refusé</span>
      <span>A compléter ou à reclasser</span>
      <span>En attente</span>
    </div>
  </header>
  <!-- js libs -->
  <script src="js/libs/jquery.js"></script>
  <script src="js/libs/flickity.pkgd.js"></script>
  <!-- js libs -->
  <script>
    var page5Advancement = [0,1,2,3,4];
    page5Advancement[0] = [0,4];
    page5Advancement[1] = [0,1];
    page5Advancement[2] = [0,4];
    page5Advancement[3] = [0,5];
    page5Advancement[4] = [0,1];

    var urlPath = document.location.href;
    var fileName = urlPath.substring(urlPath.lastIndexOf( "/" )+1 );
  </script>
  <!-- js script -->
  <script src="js/initFlickity.js"></script>
  <script src="js/loadMessage.js"></script>
  <script src="js/sideBarre.js"></script>
  <script src="js/adminTreatmentPreco.js"></script>
  <script src="js/removeNotif.js"></script>
  <script src="js/adminCountdown.js"></script>
  <script src="js/adminProgressView.js"></script>
  <!-- js script -->
</body>
</html>

