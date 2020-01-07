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
  <title>Admin</title>
  <link rel="stylesheet" href="css/libs/cssReset.css">
  <link rel="stylesheet" href="css/style_admin.css">
  <link rel="stylesheet" href="css/style_global.css">
</head>
<body>
  <?php
    /*if (isset($_POST['passwordAdmin']) AND $_POST['passwordAdmin'] ==  $passwordAdmin)
    {*/
    ?>
    <section class="leftContainer">
      <nav>
        <div>
          <span>Méthode</span>
        </div>
        <div>
          <span>Matériel</span>
        </div>
        <div>
          <span>Malade</span>
        </div>
        <div>
          <span>Main d'oeuvre</span>
        </div>
        <div>
          <span>Milieu</span>
        </div>
      </nav>
      <div></div>
    </section>
    <section class="rightContainer">

    </section>
    <?php
    /*}
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }*/
    ?>
    <script src="js/libs/jquery.js"></script>
    <script src="js/adminSelectM.js"></script>
</body>
</html>
