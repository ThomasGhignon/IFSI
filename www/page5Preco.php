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
  <title>Etape 5</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_global.css">
  <link rel="stylesheet" href="css/style_page5.css">
  <!-- CSS -->
</head>
<body>
  <section class="leftContainer">
    <?php include 'module/sideBarreInclude.php'; ?>
  </section>
  <section class="middleContainer">
    <div class="main-carousel">
      <div class="carousel-cell wrapCarousel">
        <div class="testOverflow">
          <div class="messageContainer" id="methodeMessage">
            <div class="treatment">
              <p>Les solutions que vous avez envoyées s'afficheront ici. Utilisez la légende pour connaitre l'état de validation de de celles-ci.</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="methode">
            <textarea placeholder="Entrez une solution d'évitabilité" name="message"></textarea>
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
              <p>Les solutions que vous avez envoyées s'afficheront ici. Utilisez la légende pour connaitre l'état de validation de de celles-ci.</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="materiel">
            <textarea placeholder="Entrez une solution d'évitabilité" name="message"></textarea>
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
              <p>Les solutions que vous avez envoyées s'afficheront ici. Utilisez la légende pour connaitre l'état de validation de de celles-ci.</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="malade">
            <textarea placeholder="Entrez une solution d'évitabilité" name="message"></textarea>
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
              <p>Les solutions que vous avez envoyées s'afficheront ici. Utilisez la légende pour connaitre l'état de validation de de celles-ci.</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="mainoeuvre">
            <textarea placeholder="Entrez une solution d'évitabilité" name="message"></textarea>
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
              <p>Les solutions que vous avez envoyées s'afficheront ici. Utilisez la légende pour connaitre l'état de validation de de celles-ci.</p>
            </div>
          </div>
        </div>
        <div class="sendContainer">
          <form method="POST" action="" id="milieu">
            <textarea placeholder="Entrez une solution d'évitabilité" name="message"></textarea>
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
      <span class="validatedMessage validatedMessage_hide">Validé</span>
      <span class="statContainer"><span class="advancement_stat">0</span> / <span class="advancement_goal">4</span></span>
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
    var urlPath = document.location.href;
    var fileName = urlPath.substring(urlPath.lastIndexOf( "/" )+1 );

    var page5Advancement = [0,1,2,3,4];
    page5Advancement[0] = [0,4];
    page5Advancement[1] = [0,1];
    page5Advancement[2] = [0,4];
    page5Advancement[3] = [0,5];
    page5Advancement[4] = [0,1];
  </script>
  <!-- js script -->
  <script src="js/initFlickity.js"></script>

  <script src="js/page5Send.js"></script>
  <script src="js/loadMessage.js"></script>
  <script src="js/reloadMessage_user.js"></script>
  <script src="js/dataResultSend.js"></script>

  <script src="js/removeNotif.js"></script>
  <script src="js/sideBarre.js"></script>
  <script src="js/countdown.js"></script>
  <!-- js script -->
  <script>
    sideBarre_change("17%");
    reloadMessage("<?php echo($ipLocal); ?>");
  </script>
</body>
</html>
