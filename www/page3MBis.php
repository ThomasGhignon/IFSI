<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
  <meta name="author" content="Thomas Ghignon">
  <title>Document</title>

  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_page2_3.css">
  <link rel="stylesheet" href="css/style_global.css">

  <!-- JS -->
  <script>
    document.getElementById("hiddenBarre").style.height = "70%";
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
      <!-- http://localhost/IFSI/www/page3M.php -->
      <form class="main" action="">
        <div class="content">
          <p>Entrez le code correspondant au<br>document où vous avez trouvé l'erreur :</p>
          <input type="text" placeholder="ex : 0000000">
        </div>
        <div class="button">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>
  </header>

</body>
<script src="js/libs/jquery.js"></script>
<script src="js/error.js"></script>
<script src="js/nbVerif.js"></script>
<script src="js/sideBarre.js"></script>
<script>
  sideBarre_change("50%"/*, "70%"*/);
  nb_verif("page4M", "2");
</script>
</html>
