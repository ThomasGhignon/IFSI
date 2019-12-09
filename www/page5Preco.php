  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="author" content="Thomas Ghignon">
    <title>Préconisations</title>

    <link rel="stylesheet" href="css/libs/cssReset.css">
    <link rel="stylesheet" href="css/style_global.css">
    <link rel="stylesheet" href="css/style_page5.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
    </header>
  </body>
  <script src="js/libs/jquery.js"></script>
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="js/initFlickity.js"></script>
  <script src="js/page5_addTextarea.js"></script>
  <script src="js/sideBarre.js"></script>
  <script>
    sideBarre_change("10%", "30%");
  </script>
  </html>
