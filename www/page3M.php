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
  <title>Etape 3</title>
  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_page3.css">
  <link rel="stylesheet" href="css/style_global.css">
</head>
<body>

  <header>
    <div class="wrap">
      <?php include 'module/sideBarreInclude.php'; ?>
      <div class="errorMessage_container"></div>
      <form class="main" action="">
        <div class="content">
          <p>Entrez les noms des cinq branches du diagramme d'Ishikawa : <br>( Pas de majuscule et n'oubliez pas les accents )</p>
          <div>
            <input class="input1" type="text" placeholder="ex : m....">
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
  <script src="js/libs/jquery.js"></script>
  <script src="js/ajaxPostProgress.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/page3MVerif.js"></script>
  <script src="js/error.js"></script>
  <script src="js/unitary_check.js"></script>
  <script src="js/dataResultSend.js"></script>
  <script src="js/sideBarre.js"></script>
  <script>
    sideBarre_change("55%");
    M_verif("<?php echo($ipLocal); ?>", "page4M");
  </script>
</body>
</html>
