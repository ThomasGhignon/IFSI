<?php
session_start();
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
  <title>Préconisations</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <!-- <link rel="stylesheet" href="css/style_global.css"> -->
  <link rel="stylesheet" href="css/style_page5.css">
  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>
  <section class="leftContainer">
    <div class="sideBarre">
      <div class="sideBarre_content">
        <img src="img/sideBarre/SVG/transparencyBarre2.svg" alt="sideBarre">
        <div class="hiddenBarre"></div>
        <img src="img/sideBarre/SVG/fullBarre2.svg" alt="sideBarre">
      </div>
    </div>
  </section>
  <section class="middleContainer">
    <div class="main-carousel">
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="methodeMessage">
            <div class="treatment">
              <p>Entrez votre message !!!</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="methode">
            <textarea placeholder="Entrez un préconisation" name="message"></textarea>
            <div>
              <input class="inputSubmit" type="submit" value="">
            </div>
          </form>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="materielMessage">
            <div class="treatment">
              <p>Entrez votre message !!!</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="materiel">
            <textarea placeholder="Entrez un préconisation" name="message"></textarea>
            <div>
              <input class="inputSubmit" type="submit" value="">
            </div>
          </form>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="maladeMessage">
            <div class="treatment">
              <p>Entrez votre message !!!</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="malade">
            <textarea placeholder="Entrez un préconisation" name="message"></textarea>
            <div>
              <input class="inputSubmit" type="submit" value="">
            </div>
          </form>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="mainoeuvreMessage">
            <div class="treatment">
              <p>Entrez votre message !!!</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="mainoeuvre">
            <textarea placeholder="Entrez un préconisation" name="message"></textarea>
            <div>
              <input class="inputSubmit" type="submit" value="">
            </div>
          </form>
        </div>
      </div>
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="milieuMessage">
            <div class="treatment">
              <p>Entrez votre message !!!</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="milieu">
            <textarea placeholder="Entrez un préconisation" name="message"></textarea>
            <div>
              <input class="inputSubmit" type="submit" value="">
            </div>
          </form>
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
        <span class="button button_methodeMessage">Méthode</span>
        <span class="button button_materielMessage">Matériel</span>
        <span class="button button_maladeMessage">Matière / Malade</span>
        <span class="button button_mainoeuvreMessage">Main d'oeuvre</span>
        <span class="button button_milieuMessage">Milieu</span>
      </div>
    </div>
    <div class="advancement">
      <span>1 / 2</span>
    </div>
    <div class="legend">
      <span>Validé</span>
      <span>Refusé</span>
      <span>A compléter ou mal placé</span>
      <span>En attente</span>
    </div>
  </header>
</body>
<!-- js libs -->
<script src="js/libs/jquery.js"></script>
<script src="js/libs/flickityMin.js"></script>
<!-- js libs -->
<script>
  var urlPath = document.location.href;
  var fileName = urlPath.substring(urlPath.lastIndexOf( "/" )+1 );
</script>
<!-- js script -->
<script src="js/initFlickity.js"></script>
<script src="js/page5Send.js"></script>
<script src="js/loadMessage.js"></script>
<script src="js/reloadMessage_user.js"></script>
<!-- <script src="js/page5_addTextarea.js"></script> -->
<script src="js/sideBarre.js"></script>
<!-- js script -->
<script>
  sideBarre_change("10%");
</script>
</html>
