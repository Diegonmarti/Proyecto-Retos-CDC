<?php include "INCLUDES/header2.php"; ?>

<!---------------------------------- NAV ---------------------------------->
<body>
  <nav>
    <div id="primerTercioNav">
      <div href="#" class="menu-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>

        <div class="menu-desplegable">
          <a onclick="llevarACursos(), cambioDirecto(-1)" id="enlacePython">Python</a>
          <a onclick="llevarACursos(), cambioDirecto(0)" id="enlaceHtml">HTML</a>
          <a onclick="llevarACursos(), cambioDirecto(1)" id="enlaceJavaScript">CSS</a>
        </div>
      </div>
    </div>

    <div id="segundoTercioNav">
      <img src="MULTIMEDIA/Imágenes/Logo_header.png" id="logoDelNav" />
    </div>

    <div id="tercerTercioNav">
      <label id="cursosLabel" for="cursos" class="seccionClicableNav">Cursos</label>
      <label id="newsletterLabel" for="newsletter" class="seccionClicableNav">Newsletter</label>
    </div>
  </nav>

<div id="app" class="app">
  <br><br><br><br> <h1 class="neonText" style="color: aliceblue;" onclick="toggleCards()">
       1.  CURSOS DE HTML
        <span class="neonArrow" id="arrow">&#x21E9;</span>
    </h1>

    <div class="boxesContainer">
        <!-- Tarjetas de cursos HTML aquí -->
        <div class="cardBox">
            <center>
                <h3>PRINCIPIANTE</h3>
            </center>
            <div class="card">
                <div class="front">
                    <br><br><br><br><br> <strong>&#x21bb;</strong>
                </div>
                <div class="back">
                    <h3 class="gradient-title">CURSOS HTML</h3><br>
                    <p id="parrafo1">Cursos de HTML de niveles principiante, intermedio y avanzado</p>
                    <a href="#" class="buy-button">VER CURSOS</a>
                </div>
            </div>
        </div>

        <div class="cardBox">
            <center>
                <h3>INTERMEDIO</h3>
            </center>
            <div class="card">
                <div class="front">
                    <br><br><br><br><br> <strong>&#x21bb;</strong>
                </div>
                <div class="back">
                    <h3>Back Side One</h3>
                    <p>Contenido en la tarjeta intermedia</p>
                    <a href="#">Botón 1</a>
                </div>
            </div>
        </div>

        <div class="cardBox">
            <center>
                <h3>AVANZADO</h3>
            </center>
            <div class="card">
                <div class="front">
                    <br><br><br><br><br> <strong>&#x21bb;</strong>
                </div>
                <div class="back">
                    <h3>Back Side Three</h3>
                    <p>Contenido en la tercera tarjeta</p>
                    <a href="#">Botón 3</a>
                </div>
            </div>
        </div>
    </div>
    <div class="secondContainer">
      <h1 class="neonTextCSS" style="color: aliceblue;" onclick="toggleCardsCSS()">
          2.  CURSOS DE CSS
          <span class="neonArrowCSS" id="arrowCSS">&#x21E9;</span>
      </h1>

      <div class="boxesContainerCSS">
          <!-- Tarjetas de cursos CSS aquí -->
          <div class="cardBox">
              <center>
                  <h3>PRINCIPIANTE CSS</h3>
              </center>
              <div class="card">
                  <div class="front">
                      <br><br><br><br><br> <strong>&#x21bb;</strong>
                  </div>
                  <div class="back">
                      <h3 class="gradient-title">CURSOS CSS</h3><br>
                      <p id="parrafo1CSS">Cursos de CSS de niveles principiante, intermedio y avanzado</p>
                      <a href="#" class="buy-button">VER CURSOS</a>
                  </div>
              </div>
          </div>

          <div class="cardBox">
              <center>
                  <h3>INTERMEDIO CSS</h3>
              </center>
              <div class="card">
                  <div class="front">
                      <br><br><br><br><br> <strong>&#x21bb;</strong>
                  </div>
                  <div class="back">
                      <h3>Back Side Two</h3>
                      <p>Contenido en la tarjeta intermedia de CSS</p>
                      <a href="#">Botón 2</a>
                  </div>
              </div>
          </div>

          <div class="cardBox">
              <center>
                  <h3>AVANZADO CSS</h3>
              </center>
              <div class="card">
                  <div class="front">
                      <br><br><br><br><br> <strong>&#x21bb;</strong>
                  </div>
                  <div class="back">
                      <h3>Back Side Four</h3>
                      <p>Contenido en la cuarta tarjeta de CSS</p>
                      <a href="#">Botón 4</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
    function toggleCards() {
        var boxesContainer = document.querySelector('.boxesContainer');
        var arrow = document.getElementById('arrow');

        if (boxesContainer.style.display === 'none' || boxesContainer.style.display === '') {
            boxesContainer.style.display = 'block';
            arrow.innerHTML = '&#x21E9;'; // Cambia a la flecha hacia arriba
        } else {
            boxesContainer.style.display = 'none';
            arrow.innerHTML = '&#x21E7;'; // Cambia a la flecha hacia abajo
        }
    }

    function toggleCardsCSS() {
        var boxesContainerCSS = document.querySelector('.boxesContainerCSS');
        var arrowCSS = document.getElementById('arrowCSS');

        if (boxesContainerCSS.style.display === 'none' || boxesContainerCSS.style.display === '') {
            boxesContainerCSS.style.display = 'block';
            arrowCSS.innerHTML = '&#x21E9;'; // Cambia a la flecha hacia arriba
        } else {
            boxesContainerCSS.style.display = 'none';
            arrowCSS.innerHTML = '&#x21E7;'; // Cambia a la flecha hacia abajo
        }
    }
</script>

</html>