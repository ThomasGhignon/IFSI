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
        <div class="messageContainer">
          <?php
          // Récupération des messages
            $requete = $bdd->query('SELECT * FROM methode ORDER BY id');

            while($donnees = $requete->fetch()){
                // Affichage des messages
                echo "<div class=". $donnees['status'] ."><p>" . $donnees['message'] . "</p></div>";
            }
            $requete->closeCursor();
           ?>
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

      <div class="carousel-cell">
        <div class="messageContainer">
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

      <div class="carousel-cell">
        <div class="messageContainer">
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

      <div class="carousel-cell">
        <div class="messageContainer">
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

      <div class="carousel-cell">
        <div class="messageContainer">
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
        <span class="button">Méthode</span>
        <span class="button">Matériel</span>
        <span class="button">Matière / Malade</span>
        <span class="button">Main d'oeuvre</span>
        <span class="button">Milieu</span>
      </div>
    </div>
    <div class="advancement">
      <span>1 / 2</span>
    </div>
    <div class="legend">
      <span>Validé</span>
      <span>Refusé</span>
      <span>A compléter</span>
      <span>En attente</span>
    </div>
  </header>

    <!--
  <header>
    <div class="wrap">
      <div class="sideBarre">
        <div class="sideBarre_content">
          <img src="img/sideBarre/SVG/transparencyBarre2.svg" alt="sideBarre">
          <div class="hiddenBarre"></div>
          <img src="img/sideBarre/SVG/fullBarre2.svg" alt="sideBarre">
        </div>
      </div>
      <div class="button-group">
        <button class="button">Méthode</button>
        <button class="button">Matériel</button>
        <button class="button">Matière / Malade</button>
        <button class="button">Main d'oeuvre</button>
        <button class="button">Milieu</button>
      </div>
      <div class="main-carousel">
        <div class="carousel-cell">
          <div class="cellContent cell0">
            <div>
              <h1>Méthode</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :</p>
            </div>
            <form>
              <div class="areaContainer methode_textarea">
                <div class="methodeArea">
                  <div>
                    <label for="textarea_1">
                      <img class="textareaButtonRemove" name="methode" src="img/minus.svg" alt="Moins">
                    </label>
                    <textarea placeholder="Lorem ipsum..." name="textarea_1" id="" cols="30" rows="3"></textarea>
                  </div>
                </div>
                <div class="inputAreaContainer">
                  <img class="textareaButton" name="methode" src="img/plus.svg" alt="Plus">
                </div>
              </div>
              <div class="inputContainer">
                <input type="submit">
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="cellContent cell1">
            <div>
              <h1>Matériel</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :</p>
            </div>
            <form>
              <div class="areaContainer">
                <div class="materielArea">
                  <textarea placeholder="Lorem ipsum..." name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="inputAreaContainer">
                  <img class="textareaButton" name="materiel" src="img/plus.svg" alt="Plus">
                  <img class="textareaButtonRemove" name="materiel" src="img/minus.svg" alt="Moins">
                </div>
              </div>
              <div class="inputContainer">
                <input type="submit">
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="cellContent cell2">
            <div>
              <h1>Matière / Malade</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :</p>
            </div>
            <form>
              <div class="areaContainer">
                <div class="maladeArea">
                  <textarea placeholder="Lorem ipsum..." name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="inputAreaContainer">
                  <img class="textareaButton" name="malade" src="img/plus.svg" alt="Plus">
                  <img class="textareaButtonRemove" name="malade" src="img/minus.svg" alt="Moins">
                </div>
              </div>
              <div class="inputContainer">
                <input type="submit">
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="cellContent cell3">
            <div>
              <h1>Main d'oeuvre</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :</p>
            </div>
            <form>
              <div class="areaContainer">
                <div class="mainDoeuvreArea">
                  <textarea placeholder="Lorem ipsum..." name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="inputAreaContainer">
                  <img class="textareaButton" name="mainDoeuvre" src="img/plus.svg" alt="Plus">
                  <img class="textareaButtonRemove" name="mainDoeuvre" src="img/minus.svg" alt="Moins">
                </div>
              </div>
              <div class="inputContainer">
                <input type="submit">
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="cellContent cell4">
            <div>
              <h1>Milieu</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :</p>
            </div>
            <form>
              <div class="areaContainer">
                <div class="milieuArea">
                  <textarea placeholder="Lorem ipsum..." name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="inputAreaContainer">
                  <img class="textareaButton" name="milieu" src="img/plus.svg" alt="Plus">
                  <img class="textareaButtonRemove" name="milieu" src="img/minus.svg" alt="Moins">
                </div>
              </div>
              <div class="inputContainer">
                <input type="submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header> -->
</body>
<!-- js libs -->
<script src="js/libs/jquery.js"></script>
<script src="js/libs/flickityMin.js"></script>
<!-- js libs -->
<!-- js script -->

<script src="js/initFlickity.js"></script>
<script src="js/page5Send.js"></script>

<!-- <script src="js/page5_addTextarea.js"></script> -->

<script src="js/sideBarre.js"></script>
<!-- js script -->
<script>
  sideBarre_change("10%");
</script>
</html>
