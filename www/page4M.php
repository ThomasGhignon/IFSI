<?php
require_once('module/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Etape 4</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_page4.css">
  <link rel="stylesheet" href="css/style_global.css">
</head>
<body>

  <header>
    <div class="wrap">
      <?php include 'module/sideBarreInclude.php'; ?>
      <div class="errorMessage_container"></div>
      <!-- http://localhost/IFSI/www/page5Preco.php -->
      <form class="main" action="">
        <div class="main_content">
          <div id="methode" class="selectM_0">
            <h2>Méthode</h2>
            <select name="test" id="methodeSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="test" id="methodeSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="test" id="methodeSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="test" id="methodeSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div id="materiel" class="selectM_1">
            <h2>Matériel</h2>
            <select name="" id="materielSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div id="malade" class="selectM_2">
            <h2>Matière / Malade</h2>
            <select name="" id="maladeSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="maladeSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="maladeSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="maladeSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div id="mainoeuvre" class="selectM_3">
            <h2>Main d'oeuvre</h2>
            <select name="" id="mainoeuvreSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="mainoeuvreSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="mainoeuvreSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="mainoeuvreSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div id="milieu" class="selectM_4">
            <h2>Milieu</h2>
            <select name="" id="milieuSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="milieuSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="" id="milieuSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>
  </header>
  <script src="js/libs/jquery.js"></script>
  <script src="js/ajaxPostProgress.js"></script>
  <script src="js/page4MVerif.js"></script>
  <script src="js/error.js"></script>
  <script src="js/unitary_check.js"></script>
  <script src="js/testSelect.js"></script>
  <script src="js/sideBarre.js"></script>
  <script src="js/dataResultSend.js"></script>
  <script src="js/countdown.js"></script>
  <script>
    sideBarre_change("36%");
    M_step2Verif("<?php echo($ipLocal); ?>");
  </script>
</body>
</html>
