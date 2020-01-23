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
  <title>Document</title>

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
        <div class="parent">
          <div class="div1">
            <h2>Méthode</h2>
            <select class="selectMethode" name="methode" id="methodeSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="methodeSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="methodeSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="methodeSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="methodeSelect_4">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div class="div2">
            <h2>Matériel</h2>
            <select name="pets" id="materielSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="materielSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div class="div3">
            <h2>Matière / Malade</h2>
            <select name="pets" id="maladeSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="maladeSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="maladeSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div class="div4">
            <h2>Main d'oeuvre</h2>
            <select name="pets" id="mainDoeuvreSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_4">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_5">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_6">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_7">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="mainDoeuvreSelect_8">
              <?php include 'module/selectM.php'; ?>
            </select>
          </div>
          <div class="div5">
            <h2>Milieu</h2>
            <select name="pets" id="milieuSelect_0">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="milieuSelect_1">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="milieuSelect_2">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="milieuSelect_3">
              <?php include 'module/selectM.php'; ?>
            </select>
            <select name="pets" id="milieuSelect_4">
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

</body>
<script src="js/libs/jquery.js"></script>
<script src="js/page4MVerif.js"></script>
<script src="js/error.js"></script>
<script src="js/unitary_check.js"></script>
<script src="js/testSelect.js"></script>
<script src="js/sideBarre.js"></script>
<script src="js/countdown.js"></script>
<script>
  sideBarre_change("30%");
</script>
</html>
