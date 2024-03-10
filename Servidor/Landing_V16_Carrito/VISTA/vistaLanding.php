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


    <form id="tercerTercioNav" action="CONTROLADOR/cambioEstadoSesion.php" method="POST">
      <input type="submit" name="inicioSesion" class="seccionClicableNav" value="Iniciar sesión">
      <div id="newsletterLabel" class="seccionClicableNav">Newsletter</div>
    </form>

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
            HTML/CSS
            <img 
              src="MULTIMEDIA/Imágenes/ApartadoCursos/Cursos/HTML.png"
              style="width: 50px; height: 43px; margin-left: 20px" 
            />
          </h1>
          <p class="text description">Conviértete en un maestro del lenguaje universal <br /> de la web. Suscríbete ahora a nuestros <br />cursos CDC y descubre cómo la programación<br /> HTML puede transformar tu habilidad para crear <br />sitios web impactantes y funcionales <br />desde cero.</p>
        </div>

        <div class="info next--info">
          <h1 class="text name">
            JavaScript
            <img 
              src="MULTIMEDIA/Imágenes/ApartadoCursos/Cursos/JavaScript.png"
              style="width: 50px; height: 43px; margin-left: 20px" 
            />
          </h1>
          <p class="text description">Da vida a tus ideas con estilo. Suscríbete hoy <br />a nuestros cursos CDC y sumérgete en el mundo <br />del diseño web con CSS. Aprenderás a transformar<br /> conceptos simples en experiencias visuales cautivadoras.</p>
        </div>

        <div class="info previous--info">
          <h1 class="text name">
            Python
            <img
              src="MULTIMEDIA/Imágenes/ApartadoCursos/Cursos/Python.png"
              style="width: 50px; height: 43px; margin-left: 20px" 
            />
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
        <form id="formularioRegistro" name="formulario" method="POST" action="<?php $modelo -> guardarUsuario() ?>">



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

            foreach($listaNiveles as $nivel) { 
              $codigoNivel = $nivel["codigo"];
              $nombreNivel = $nivel["nombre"];

              if ($primero) {
                echo "<option value='$codigoNivel' selected> $nombreNivel</option>";
                $primero = false;

              } else {
                  echo "<option value='$codigoNivel'> $nombreNivel</option>";
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

              foreach ($listaPaises as $pais) {
                $codigoPais = $pais["codigo"];
                $nombrePais = $pais["nombre"];
                if ($primero) {
                  echo "<option value='$codigoPais' selected> $nombrePais </option>";
                  $primero = false;

                } else {
                  echo "<option value='$codigoPais'> $nombrePais </option>";
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


      <!---------------------------------- FORMULARIO ---------------------------------->
      <footer id="footer">
              <div class="footerCentral">
                <p>
                  © [2024] [CDC]. Todos los derechos reservados. <br>
                    <b id="enlaceAvisoLegal" class="enlaceTerminos">Aviso Legal</b>   | <b id="enlaceCondiciones" class="enlaceTerminos">Condiciones de uso</b>  | <b id="enlaceTerminosServicio" class="enlaceTerminos">Términos de Servicio</b>  | <b id="enlacePoliticaPrivacidad" class="enlaceTerminos">Política de Privacidad</b>  
                </p> 
              </div>

              <div id="avisoLegal" class="terminoDesplegado">
                <p class="textoTerminoDesplegado">
                  <b>Aviso Legal:</b><br>
                  <br>
                  El presente aviso legal regula el uso del sitio web [www.CDC.com] 
                  (en adelante, el "CDC"), del que es titular [TresW Group], 
                  con domicilio en [C/ de ejemplo], y con NIF [12345678Z].
                </p>
              </div>

              <div id="condicinonesUso" class="terminoDesplegado">
                <p class="textoTerminoDesplegado">
                  <b>Condiciones de Uso:</b><br>
                  <br>
                  El acceso y uso del Sitio Web atribuye la condición de usuario y 
                  supone la aceptación plena y sin reservas por parte del usuario de 
                  todas y cada una de las condiciones incluidas en este Aviso Legal. 
                  Por ello, el usuario debe leer atentamente el presente Aviso Legal en 
                  cada una de las ocasiones en que se proponga utilizar el Sitio Web, 
                  ya que éste puede sufrir modificaciones. <br>

                  El usuario se compromete a utilizar el Sitio Web, sus servicios y 
                  contenidos de conformidad con la ley, el presente Aviso Legal, las 
                  buenas costumbres y el orden público. Del mismo modo, el usuario se 
                  obliga a no utilizar el Sitio Web o los servicios que se presten a 
                  través de él con fines o efectos ilícitos o contrarios al contenido del 
                  presente Aviso Legal, lesivos de los intereses o derechos de terceros, o 
                  que de cualquier forma puedan dañar, inutilizar o deteriorar el Sitio Web 
                  o sus servicios, o impedir un normal disfrute del mismo por otros usuarios.
                </p>
              </div>


              <div id="politicaPrivacidad" class="terminoDesplegado">
                <p class="textoTerminoDesplegado">
                  <b>Política de Privacidad</b><br>
                  <br>
                  Esta Política de Privacidad describe cómo [Nombre de la Empresa] (en adelante, 
                  "nosotros", "nuestro/a" o "la Empresa") recopila, utiliza y protege la información 
                  personal que recopilamos a través de nuestro sitio web [Nombre del Sitio Web] (en 
                  adelante, el "Sitio Web"). Al utilizar nuestro Sitio Web, aceptas las prácticas 
                  descritas en esta política.
                  <br>
                  <br>
                  1. Información que Recopilamos <br>
                  1.1. Recopilamos información personal que nos proporcionas voluntariamente cuando 
                  te registras en nuestro Sitio Web, realizas una compra, participas en encuestas o 
                  concursos, o te comunicas con nosotros por correo electrónico u otros medios.
                  <br>
                  1.2. La información que recopilamos puede incluir, entre otros datos, tu nombre, 
                  dirección de correo electrónico, dirección postal, número de teléfono, información 
                  de pago y detalles de facturación.
                  <br>
                  1.3. También podemos recopilar automáticamente cierta información sobre tu 
                  dispositivo y tu actividad en nuestro Sitio Web utilizando cookies u otras 
                  tecnologías de seguimiento. Esta información puede incluir tu dirección IP, 
                  tipo de navegador, páginas visitadas, tiempo de visita y otros datos de uso.
                  <br>
                  <br>
                  2. Uso de la Información
                  <br>
                  2.1. Utilizamos la información que recopilamos para proporcionarte nuestros 
                  servicios y productos, procesar tus pedidos, responder a tus consultas y brindarte 
                  asistencia al cliente.
                  <br>
                  2.2. Además, podemos utilizar la información para personalizar tu experiencia en 
                  nuestro Sitio Web, mejorar nuestros productos y servicios, y enviar comunicaciones 
                  de marketing y promociones que creemos que pueden ser de tu interés.
                  <br>
                  3. Compartir de la Información
                  <br>
                  <br>
                  3.1. No vendemos, alquilamos ni compartimos tu información personal con terceros 
                  con fines comerciales, excepto cuando sea necesario para proporcionarte nuestros 
                  servicios o cumplir con obligaciones legales.
                  <br>
                  3.2. Podemos compartir tu información personal con proveedores de servicios que 
                  nos ayudan a operar nuestro Sitio Web o a ofrecerte nuestros productos y servicios, 
                  como procesadores de pagos, servicios de envío y proveedores de alojamiento web.
                  <br>
                  <br>
                  4. Seguridad de la Información
                  <br>
                  4.1. Implementamos medidas de seguridad técnicas, administrativas y físicas para 
                  proteger la información personal que recopilamos y mantenemos contra el acceso no 
                  autorizado, la divulgación, la alteración o la destrucción.
                  <br>
                  4.2. Sin embargo, debes tener en cuenta que ninguna medida de seguridad es 
                  completamente segura, y no podemos garantizar la seguridad absoluta de tu información.
                  <br>
                  <br>
                  5. Tus Derechos
                  <br>
                  5.1. Tienes derecho a acceder, corregir, actualizar o eliminar tu información 
                  personal en cualquier momento. También puedes optar por no recibir comunicaciones de 
                  marketing de nuestra parte siguiendo las instrucciones de cancelación de suscripción 
                  incluidas en dichas comunicaciones.
                  <br>
                  <br>
                  6. Cambios en esta Política de Privacidad
                  6.1. Nos reservamos el derecho de actualizar esta Política de Privacidad en 
                  cualquier momento y sin previo aviso. Te notificaremos cualquier cambio significativo 
                  publicando una versión actualizada en nuestro Sitio Web.
                  <br>
                  6.2. Te recomendamos que revises esta Política de Privacidad periódicamente para 
                  estar al tanto de cualquier cambio. El uso continuado de nuestro Sitio Web después 
                  de la publicación de cambios en esta Política de Privacidad implicará tu aceptación 
                  de dichos cambios.
                  <br>
                  <br>
                  7. Contacto <br>
                  Si tienes alguna pregunta sobre esta Política de Privacidad o sobre nuestras 
                  prácticas de privacidad, puedes ponerte en contacto con nosotros a través de 
                  [Dirección de Contacto] o enviando un correo electrónico a [Correo Electrónico de 
                  Contacto].
                  <br>
                  Fecha de última actualización: [09/02/2024]
                </p>
              </div>
                

              <div id="terminosServicio" class="terminoDesplegado">
                <p class="textoTerminoDesplegado">
                  <b>Términos de Servicio</b><br>
                  <br>
                  Estos términos de servicio regulan el acceso y uso del Sitio Web, así 
                  como la adquisición de nuestros cursos de programación y otros servicios 
                  relacionados. Al acceder y utilizar el Sitio Web, aceptas estos 
                  términos en su totalidad. Si no estás de acuerdo con alguna parte de estos 
                  términos, por favor, no utilices nuestro Sitio Web. <br>
                  <br>
                  1. Uso del Sitio Web: <br>
                  1.1. El acceso al Sitio Web está permitido de forma temporal y nos reservamos 
                  el derecho de retirar o modificar los servicios que ofrecemos sin previo aviso. 
                  No nos hacemos responsables si por cualquier razón el Sitio Web no está 
                  disponible en un momento dado.
                  <br>

                  1.2. Para acceder a determinados servicios o recursos del Sitio Web, es posible 
                  que necesites registrarte y proporcionar cierta información personal. Debes 
                  asegurarte de que la información proporcionada sea precisa y completa, y 
                  actualizarla cuando sea necesario.
                  <br>
                  <br>

                  2. Cursos y Contenidos
                  <br>
                  2.1. Los cursos de programación y otros contenidos disponibles en el Sitio Web 
                  están sujetos a cambios y actualizaciones sin previo aviso.
                  <br>
                  2.2. El acceso a los cursos y contenidos puede requerir el pago de una tarifa. 
                  Aceptas abonar todas las tarifas aplicables en el momento de la compra.
                  <br>
                  2.3. Todos los cursos y contenidos disponibles en el Sitio Web son propiedad 
                  intelectual de [Nombre de la Empresa] o de sus licenciantes, y están protegidos 
                  por las leyes de propiedad intelectual aplicables .
                </p>
              </div>
      </footer>
      <script src="JS/accionesTerminos.js"></script>
  </body>
  
</html>
    
  
