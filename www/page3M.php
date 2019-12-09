<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Les 5 M</title>
  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_page3.css">
  <link rel="stylesheet" href="css/style_global.css">

  <!-- JS -->
  <script>
    document.getElementById("hiddenBarre").style.height = "90%";
  </script>
  <!-- JS -->
</head>
<body>

  <header>
    <div class="wrap">
      <div class="sideBarre">
        <div class="sideBarre_content">
          <img src="img/sideBarre/SVG/transparencyBarre2.svg" alt="sideBarre">
          <div class="hiddenBarre"></div>
          <img src="img/sideBarre/SVG/fullBarre2.svg" alt="sideBarre">
        </div>
      </div>
      <div class="errorMessage_container"></div>
      <!-- http://localhost/IFSI/www/page4MBis.php -->
      <form class="main" action="">
        <div class="content">
          <p>Entrez les mots correspondants aux cinq M :</p>
          <div>
            <input class="input1" type="text" placeholder="ex : M....">
            <input class="input2" type="text">
            <input class="input3" type="text">
            <input class="input4" type="text">
            <input class="input5" type="text">
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
<script src="js/page3MVerif.js"></script>
<script src="js/error.js"></script>
<script src="js/unitary_check.js"></script>
<script src="js/sideBarre.js"></script>
<script>
  sideBarre_change("70%"/*, "90%"*/);
</script>
</html>
