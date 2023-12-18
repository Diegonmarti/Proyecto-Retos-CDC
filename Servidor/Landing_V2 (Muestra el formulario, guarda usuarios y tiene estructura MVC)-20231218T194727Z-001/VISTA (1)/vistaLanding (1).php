<?php include "INCLUDES/header.php"; ?>
  
<!---------------------------------- NAV ---------------------------------->
  <nav>
    <div id="primerTercioNav">
      <div href="#" class="menu-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>

        <div class="menu-desplegable">
          <a href="">Iniciar sesión</a>
          <a href="">Registrarse</a>
          <br>
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
      <div id="cursosLabel" class="seccionClicableNav">Cursos</div>
      <div id="newsletterLabel" class="seccionClicableNav">Newsletter</div>
    </div>
  </nav>






<!---------------------------------- MAIN (CURSOS) ---------------------------------->

  <div id="app" class="app">
    <div class="cardList">
      <button class="cardList__btn btn btn--left">
        <div class="icon">
          <svg>
            <use xlink:href="#arrow-left"></use>
          </svg>
        </div>
      </button>

      <div class="cards__wrapper">
        <div class="card current--card">
          <div class="card__image">
            <img src="https://i.stack.imgur.com/faB8G.png" alt="" />
          </div>
        </div>

        <div class="card next--card">
          <div class="card__image">
            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/css-z-index.JPG" alt="" />
          </div>
        </div>

        <div class="card previous--card">
          <div class="card__image">
            <img
              src="https://global.discourse-cdn.com/codecademy/optimized/5X/c/c/7/8/cc78742fcd4f36e7dd2371bf091c588f826ffb06_2_422x499.png"
              alt="" />
          </div>
        </div>
      </div>

      <button class="cardList__btn btn btn--right">
        <div class="icon">
          <svg>
            <use xlink:href="#arrow-right"></use>
          </svg>
        </div>
      </button>
    </div>

    <div class="infoList">
      <div class="info__wrapper">
        <div class="info current--info">
          <h1 class="text name">
            HTML<img src="https://cdn3d.iconscout.com/3d/free/thumb/free-html-logo-6563588-5453024.png?f=webp"
              style="width: 50px; height: 43px; margin-left: 20px" />
          </h1>
          <p class="text description">Conviértete en un maestro del lenguaje universal <br /> de la web. Suscríbete ahora a nuestros <br />cursos CDC y descubre cómo la programación<br /> HTML puede transformar tu habilidad para crear <br />sitios web impactantes y funcionales <br />desde cero.</p>
        </div>

        <div class="info next--info">
          <h1 class="text name">
            CSS
            <img src="https://cdn3d.iconscout.com/3d/free/thumb/free-css-logo-6563485-5453030.png?f=webp"
              style="width: 50px; height: 43px; margin-left: 20px" />
          </h1>
          <p class="text description">Da vida a tus ideas con estilo. Suscríbete hoy <br />a nuestros cursos CDC y sumérgete en el mundo <br />del diseño web con CSS. Aprenderás a transformar<br /> conceptos simples en experiencias visuales cautivadoras.</p>
        </div>

        <div class="info previous--info">
          <h1 class="text name">
            Python
            <img
              src="https://static.vecteezy.com/system/resources/thumbnails/012/697/295/small/3d-python-programming-language-logo-free-png.png"
              style="width: 50px; height: 43px; margin-left: 20px" />
          </h1>
          <p class="text description">
            Apuntate a nuestro curso ampliamente<br />utilizado en las
            aplicaciones web, <br />es muy facil de aprender, gracias a<br />
            nuestros profesores altamente cualificados.
          </p>
        </div>
      </div>
    </div>

      <div class="app__bg">
        <div class="app__bg__image current--image">
          <img src="https://source.unsplash.com/Z8dtTatMVMw" alt="" />
        </div>
        <div class="app__bg__image next--image">
          <img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
        </div>
        <div class="app__bg__image previous--image">
          <img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
        </div>
      </div>
    </div>


    <div class="loading__wrapper">
      <div class="loader--text">Loading...</div>
      <div class="loader">
        <span></span>
      </div>
    </div>

    <svg class="icons" style="display: none">
      <symbol
        id="arrow-left"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <polyline
          points="328 112 184 256 328 400"
          style="
            fill: none;
            stroke: black;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 48px;"/>
      </symbol>
      <symbol
        id="arrow-right"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <polyline
          points="184 112 328 256 184 400"
          style="
            fill: none;
            stroke: black;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 48px;"/>
      </symbol>
    </svg>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>ç





<!---------------------------------- FORMULARIO ---------------------------------->

<script src="JS/validacion.js"></script>

    <div id="imagenLogo">
      <img src="MULTIMEDIA/Imágenes/Icono.png">
    </div>
    
    <div id="lineaSeparadora"></div>  
    <div id="tituloPrincipal">APÚNTATE A NUESTRA NEWSLETTER</div>



    <main id="ContenedorPrincipal">
      <!-- GIF -->
      <div id="ContenedorImagenYTitulo">
          <img src="MULTIMEDIA/videos/Gif_Programando.gif" alt="GIF">
      </div>


      <!-- FORMULARIO -->
      <div id="ContenedorFormulario">
        <form name="formulario" method="POST" action="<?php $modelo -> guardarUsuario() ?>">



          <!-- NOMBRE -->
          <label for="nombre">Nombre y apellido <span class="obligatorios"><b>(OBLIGATORIO)</b></span></label><br/>
          <div class="borde" id="nombreBorde">

            <input
              autocomplete="off"
              class="camposacentrar"
              type="text"
              id="nombre"
              name="nombre"
              onfocus="validarNombre(this)"
              oninput="validarNombre(this)"/>

            <div class="icono" id="iconoNombre"></div>

          </div>

          <p class="error" id="nombreObligatorio">
            - El campo debe estar relleno </p>
          <p class="error" id="nombreYApellido">
            - Debes introducir nombre y primer apellido únicamente </p>
          <p class="error" id="nombreLetras">
            - El nombre solo puede contener caracteres </p>
          <br>



          <!-- NIF -->
          <label for="nif">NIF <span class="obligatorios"><b>(OBLIGATORIO)</b></span></label><br/>
          <div class="borde" id="nifBorde">

            <input
              autocomplete="off"
              class="camposacentrar"
              type="text"
              id="nif"
              name="nif"
              onfocus="validarDNI()"
              oninput="validarDNI()"/>
            <div class="icono" id="iconoNIF"></div>

          </div>
          <p class="error" id="nifObligatorio">
            - El campo debe estar relleno </p>
          <p class="error" id="nifIncorrecto">
            - El NIF es inválido </p>
          <br/>



          <!-- CORREO -->
          <label for="email">Email <span class="obligatorios"><b>(OBLIGATORIO)</b></span></label><br/>
          <div class="borde" id="emailBorde">

            <input
              autocomplete="off"
              class="camposacentrar"
              type="text"
              id="email"
              name="email"
              onfocus="validarEmail()"
              oninput="validarEmail()"/>
            <div class="icono" id="iconoEmail"></div>  

          </div>       
          <p class="error" id="emailObligatorio">
            - El campo debe estar relleno </p>
          <p class="error" id="emailIncorrecto">
            - El email es inválido</p>
          <br>          



          <!-- CONTRASEÑA -->
          <label for="contrasenia">Contraseña <span class="obligatorios"><b>(OBLIGATORIO)</b></span></label><br />
          <div class="borde" id="contraseniaBorde">

            <input 
              autocomplete="off"
              class="camposacentrar" 
              type="password"   
              id="contrasenia" 
              name="contrasenia"
              onfocus="validarContrasenia()" 
              oninput="validarContrasenia()" /><br />
            <div class="icono" id="iconoContrasenia"></div>

          </div>
          <p class="error" id="contraseniaObligatorio">
            - El campo debe estar relleno </p>
          <p class="error" id="contraseniaLongitud">
            - La contraseña debe contener al menos 8 caracteres </p>
          <p class="error" id="contraseniaMinuscula">
            - La contraseña debe contener al menos una minúscula </p>
          <p class="error" id="contraseniaMayuscula">
            - La contraseña debe contener al menos una mayúscula </p>
          <p class="error" id="contraseniaNumero">
            - La contraseña debe contener al menos un número </p>
          <p class="error" id="contraseniaSimbolo">
            - La contraseña debe contener al menos un símbolo </p>
          <br>
    


          <!-- REPETIR CONTRASEÑA -->
          <label for="repetirContrasenia">Repetir contraseña <span class="obligatorios"><b>(OBLIGATORIO)</b></span></label><br />
          <div class="borde" id="contraseniaRepetirBorde">

            <input 
              autocomplete="off"
              class="camposacentrar" 
              type="password" 
              id="repetirContrasenia" 
              name="repetirContrasenia"
              onfocus="validarRepetirContrasenia()" 
              oninput="validarRepetirContrasenia()" /><br />
            <div class="icono" id="iconoContraseniaRepetir"></div>

          </div>
          <p class="error" id="contraseniaRepetirObligatorio">
            - El campo debe estar relleno </p>
          <p class="error" id="contraseniaRepetirCoincide">
            - La contraseña debe coincidir </p>
          <br>
    


          <!-- NIVEL PROGRAMACIÓN -->
          <label for="nivel">Nivel de Programación</label><br />
          <select class="camposacentrar" name="nivel" id="nivel">
          <?php
            $primero = true; 
            $totalNiveles = count($listaNiveles);
            $contador = 0;

            while($contador < $totalNiveles) { 
              $nivel = $listaNiveles[$contador];
              if ($primero) {
                echo "<option value='$nivel[0]' selected> $nivel[1]</option>";
                $primero = false;

              } else {
                  echo "<option value='$nivel[0]'> $nivel[1]</option>";
              }

              $contador++;
            }
          ?>
          </select>
          <br><br>
    
    

          <!-- FECHA DE NACIMIENTO -->
          <label for="fechanacimiento">Fecha de Nacimiento</label><br />
          <input class="camposacentrar" type="date" name="fechanacimiento" id="fechanacimiento"/>
          <br><br>
    
    

          <!-- PAÍS -->
          <label for="paises">País</label><br />
          <select class="camposacentrar" name="paises" id="paises">
            <?php
              $primero = true; 
              $totalPaises = count($listaPaises);
              $contador = 0;

              while($contador < $totalPaises) { 
                $pais = $listaPaises[$contador];
                if ($primero) {
                  echo "<option value='$pais[0]' selected> $pais[1]</option>";
                  $primero = false;

                } else {
                    echo "<option value='$pais[0]'> $pais[1]</option>";
                }

                $contador++;
              }
            ?>
          </select>
          <br><br>
    



          <!-- CHECKBOXES -->
          <label for="notificaciones">¿Quieres activar las notificaciones?</label>
          <input class="camposacentrar" type="checkbox" id="notificaciones" name="notificaciones" value="1" /><br />
  
          <label for="revista">¿Quieres subscribirte a la revista digital?</label>
          <input class="camposacentrar" type="checkbox" id="revista" name="revista" value="1" /><br /><br />



          <!-- BOTÓN ENVIAR -->
          <button type="submit" id="enviar" name="enviar" onmouseover="comprobarTodosBien()">Enviar</button>
          <p id="mensajeError" class="error"></p>
          <p id="mensajeExito" style="color: green; font-weight: bold; display: none"></p>
          <span id="formularioError" style="color: red"></span>
          <br>
            
            
          </form>
        </div>
      </main>
  </body>
  
</html>
    
  
