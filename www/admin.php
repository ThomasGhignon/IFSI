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
    if (isset($_POST['passwordAdmin']) AND $_POST['passwordAdmin'] ==  "1")
    {
    ?>

    <?php
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
</body>
</html>
