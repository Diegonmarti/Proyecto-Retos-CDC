
/**
 * @function
 * Cambia el color de los campos a rojo
 * y muestra el mensaje de error
 * 
 * @param {*} caja : Caja (Input) del campo no válido
 * @param {*} espacioParaMensajeDeError : Dónde se mostrará
 * el error.
 * @param {*} mensajeErrorAMostrar : Que mensaje de error
 * se mostrará en el campo indicado antes. 
 */
function indicarInvalidez(caja, espacioParaMensajeDeError, mensajeErrorAMostrar) {
    caja.style.borderColor = "red";
    espacioParaMensajeDeError.textContent = mensajeErrorAMostrar + "<br>";
}



/**
 * @function
 * Cambia el color de la caja (Input) del campo 
 * validado a verde y elimina todos los mensajes
 * de error que hubiese previamente.
 * 
 * @param {*} caja : Caja (Input) del campo válido.
 * @param {*} espacioParaMensajeDeError : Campo del 
 * mensaje de error para dejarlo vacío 
 */
function indicarValidez(caja, espacioParaMensajeDeError) {
    caja.style.borderColor = "green";
    espacioParaMensajeDeError.textContent = "";
}




/**
 * @function
 * Comprueba que en el campo nombre se intruduzca 
 * un nombre válido.
 * - No esté vacío.
 * - No tenga más de dos palabras
 * - No contenga nada más que letras y espacios.
 * 
 * En caso de ser válido, cambia el color del borde a verde
 * y si no a rojo.
 * 
 * @returns esValido: Si el nombre es válido devuelve 
 * un booleano true
 */
 function validarNombre(input) {
    var esValido = false;

    var valor = input.value.trim();
    var nombreObligatorio = document.getElementById("nombreObligatorio");
    var nombreYApellido = document.getElementById("nombreYApellido");
    var nombreLetras = document.getElementById("nombreLetras");
    var nombreBorde = document.getElementById("nombreBorde");
    var iconoNombre = document.getElementById("iconoNombre");

    // Restablecer clases de borde
    nombreBorde.classList.remove("borde-rojo");
    nombreBorde.classList.remove("borde-verde");

    // Validar y aplicar estilos
    if (valor === "") {
      nombreObligatorio.style.display = "block";
      nombreYApellido.style.display = "none";
      nombreLetras.style.display = "none";
      nombreBorde.classList.add("borde-rojo");
      iconoNombre.className = "icono icono-incorrecto";

    } else if (!/^[A-Za-z\s]+$/.test(valor)) {
      nombreObligatorio.style.display = "none";
      nombreYApellido.style.display = "none";
      nombreLetras.style.display = "block";
      nombreBorde.classList.add("borde-rojo");
      iconoNombre.className = "icono icono-incorrecto";

    } else if (!/^[A-Za-z]+\s[A-Za-z]+$/.test(valor)) {
      nombreObligatorio.style.display = "none";
      nombreYApellido.style.display = "block";
      nombreLetras.style.display = "none";
      nombreBorde.classList.add("borde-rojo");
      iconoNombre.className = "icono icono-incorrecto";

    } else {
      nombreObligatorio.style.display = "none";
      nombreYApellido.style.display = "none";
      nombreLetras.style.display = "none";
      nombreBorde.classList.add("borde-verde");
      iconoNombre.className = "icono icono-correcto";

      esValido = true;
    }

    return esValido;
  }


//pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))"
function validarDNI() {
    var nifInput = document.getElementById('nif');
    var nifBorde = document.getElementById('nifBorde');
    var iconoNIF = document.getElementById('iconoNIF');

    var nif = nifInput.value;
    var expresionRegularNIF = /^[0-9]{8}[A-Za-z]$/;
    var relleno = nif !== '';
    var correcto = expresionRegularNIF.test(nif);

    if (correcto) {
        var numero = parseInt(nif.substring(0, 8));
        var letra = nif.charAt(8).toUpperCase();
        var letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        correcto = letras.charAt(numero % 23) === letra;
    }

    document.getElementById('nifObligatorio').style.display = relleno ? 'none' : 'block';
    document.getElementById('nifIncorrecto').style.display = correcto ? 'none' : 'block';

    // Restablecer clases de borde
    nifBorde.classList.remove("borde-rojo");
    nifBorde.classList.remove("borde-verde");

    // Aplicar estilos
    if (relleno && correcto) {
        nifBorde.classList.add("borde-verde");
        iconoNIF.className = "icono icono-correcto";
    } else {
        nifBorde.classList.add("borde-rojo");
        iconoNIF.className = "icono icono-incorrecto";
    }

    return relleno && correcto;
}

/**
 * @function
 * Comprueba que en el campo email se intruduzca 
 * un email válido.
 * - No esté vacío.
 * - Que contnga al menos un @, un punto y no tenga espacios
 * 
 * En caso de ser válido, cambia el color del borde a verde
 * y si no a rojo.
 * 
 * @returns esValido: Si el email es válido devuelve 
 * un booleano true
 */
function validarEmail() {
    var esValido = false;

    var emailInput = document.getElementById('email');
    var emailBorde = document.getElementById('emailBorde');
    var iconoEmail = document.getElementById('iconoEmail');

    var email = emailInput.value;
    var expresionRegularEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var relleno = email !== '';
    var correcto = expresionRegularEmail.test(email);

    // Restablecer clases de borde
    emailBorde.classList.remove("borde-rojo");
    emailBorde.classList.remove("borde-verde");

    // Aplicar estilos
    if (relleno && correcto) {
        emailBorde.classList.add("borde-verde");
        iconoEmail.className = "icono icono-correcto";

        esValido = true;
    } else {
        emailBorde.classList.add("borde-rojo");
        iconoEmail.className = "icono icono-incorrecto";
    }

    document.getElementById('emailObligatorio').style.color = relleno ? 'green' : 'red';
    document.getElementById('emailIncorrecto').style.color = correcto ? 'green' : 'red';


    // Mostrar mensajes de error al cargar la página
    document.getElementById('emailObligatorio').style.display = 'block';
    document.getElementById('emailIncorrecto').style.display = 'block';

    return esValido;
}

/**
 * @function
 * Comprueba si la contraseña que se introduce es 
 * válida según los siguientes filtros:
 * - Debe contener al menos 8 caracteres.
 * - Debe contener al menos un número. 
 * 
 * Dependiedo de si es válida o no, cambiará el color del
 * borde de su respectivo campo a verde o rojo.
 * 
 * @returns esValido: En caso de pasar las pruebas
 * tendrá valor "true", en caso contrario, "false".
 */
 function validarContrasenia() {
    var esValido = false;

    var contraseniaInput = document.getElementById('contrasenia');
    var contraseniaBorde = document.getElementById('contraseniaBorde');
    var iconoContrasenia = document.getElementById('iconoContrasenia');
    var contraseniaObligatorio = document.getElementById('contraseniaObligatorio');

    var contrasenia = contraseniaInput.value;
    var longitud = contrasenia.length >= 8;
    var minuscula = contrasenia.toUpperCase() !== contrasenia;
    var mayuscula = contrasenia.toLowerCase() !== contrasenia;
    var numero = /\d/.test(contrasenia);
    var simbolo = /[^\w\s]/gi.test(contrasenia);
    var relleno = contrasenia !== '';

    // Restablecer clases de borde
    contraseniaBorde.classList.remove("borde-rojo");
    contraseniaBorde.classList.remove("borde-verde");

    // Aplicar estilos
    if (relleno && longitud && minuscula && mayuscula && numero && simbolo) {
        contraseniaBorde.classList.add("borde-verde");
        iconoContrasenia.textContent = "✔"; // Checkmark
        iconoContrasenia.style.color = "green"; // Adjust color as needed

        esValido = true;
    } else {
        contraseniaBorde.classList.add("borde-rojo");
        iconoContrasenia.textContent = "✖"; // Cross
        iconoContrasenia.style.color = "red"; // Adjust color as needed
    }

    document.getElementById('contraseniaLongitud').style.color = longitud ? 'green' : 'red';
    document.getElementById('contraseniaMinuscula').style.color = minuscula ? 'green' : 'red';
    document.getElementById('contraseniaMayuscula').style.color = mayuscula ? 'green' : 'red';
    document.getElementById('contraseniaNumero').style.color = numero ? 'green' : 'red';
    document.getElementById('contraseniaSimbolo').style.color = simbolo ? 'green' : 'red';
    contraseniaObligatorio.style.color = relleno ? 'green' : 'red';

    // Mostrar mensajes de error al cargar la página
    contraseniaObligatorio.style.display = 'block';
    document.getElementById('contraseniaLongitud').style.display = 'block';
    document.getElementById('contraseniaMinuscula').style.display = 'block';
    document.getElementById('contraseniaMayuscula').style.display = 'block';
    document.getElementById('contraseniaNumero').style.display = 'block';
    document.getElementById('contraseniaSimbolo').style.display = 'block';

    return esValido;
}

     

    

/**
 * @function
 * Comprueba si esta contraseña coincide con
 * la primera.
 *
 * @returns esValido : True, si esta contraseña
 * es igual y false si no lo es.
 */
 function validarRepetirContrasenia() {
    var esValido = false;

    var contrasenia = document.getElementById('contrasenia');
    var repetirContraseniaInput = document.getElementById('repetirContrasenia');
    var contraseniaRepetirObligatorio = document.getElementById('contraseniaRepetirObligatorio');
    var contraseniaRepetirCoincide = document.getElementById('contraseniaRepetirCoincide');
    var contraseniaRepetirBorde = document.getElementById('contraseniaRepetirBorde');
    var iconoContraseniaRepetir = document.getElementById('iconoContraseniaRepetir');

    var repetirContrasenia = repetirContraseniaInput.value;
    var relleno = repetirContrasenia !== '';
    var coinciden = contrasenia.value == repetirContrasenia;

    // Restablecer clases de borde
    contraseniaRepetirBorde.classList.remove("borde-rojo");
    contraseniaRepetirBorde.classList.remove("borde-verde");

    // Aplicar estilos
    if (relleno && coinciden) {
        contraseniaRepetirBorde.classList.add("borde-verde");
        iconoContraseniaRepetir.textContent = "✔"; // Checkmark
        iconoContraseniaRepetir.style.color = "green"; // Adjust color as needed

        esValido = true;
    } else {
        contraseniaRepetirBorde.classList.add("borde-rojo");
        iconoContraseniaRepetir.textContent = "✖"; // Cross
        iconoContraseniaRepetir.style.color = "red"; // Adjust color as needed
    }

    contraseniaRepetirObligatorio.style.color = relleno ? 'green' : 'red';
    contraseniaRepetirCoincide.style.color = coinciden ? 'green' : 'red';
    
    // Mostrar mensajes de error al cargar la página
    contraseniaRepetirObligatorio.style.display = 'block';
    contraseniaRepetirCoincide.style.display = 'block';

    return esValido;
}


function comprobarTodosBien() {
    var nombreValido = validarNombre(document.getElementById('nombre'));
    var dniValido = validarDNI();
    var emailValido = validarEmail();
    var contraseñaValida = validarContrasenia();
    var repetirContraseniaValida = validarRepetirContrasenia();

    console.log("nombreValido:", nombreValido);
    console.log("dniValido:", dniValido);
    console.log("emailValido:", emailValido);
    console.log("contraseñaValida:", contraseñaValida);
    console.log("repetirContraseniaValida:", repetirContraseniaValida);

    if (nombreValido && dniValido && emailValido && contraseñaValida && repetirContraseniaValida) {
        document.getElementById("enviar").removeAttribute("disabled");
        cambiarColorBoton('#008000');
        return true;
    } else {
        document.getElementById("enviar").setAttribute("disabled", true);
        cambiarColorBoton('red');
        return false;
    }
}

function cambiarColorBoton(color) {
    var botonEnviar = document.getElementById('enviar');
    botonEnviar.style.backgroundColor = color;
}

const { gsap, imagesLoaded } = window;

const buttons = {
    prev: document.querySelector(".btn--left"),
    next: document.querySelector(".btn--right"),
};
const cardsContainerEl = document.querySelector(".cards__wrapper");
const appBgContainerEl = document.querySelector(".app__bg");

const cardInfosContainerEl = document.querySelector(".info__wrapper");

buttons.next.addEventListener("click", () => swapCards("right"));

buttons.prev.addEventListener("click", () => swapCards("left"));


var tarjetaActual = 0;

function cambioDirecto(numeroCurso) {
    switch (tarjetaActual) {
        case -1:
            switch (numeroCurso) {
                case -1:
                    break;
            
                case 0:
                    swapCards("right");
                    break;

                case 1:
                    swapCards("left");
                    break;

                default:
                    break;
            }
            break;
        case 0:
            switch (numeroCurso) {
                case -1:
                    swapCards("left");
                    break;
            
                case 0:
                    break;

                case 1:
                    swapCards("right");
                    break;

                default:
                    break;
            }
            break;

        case 1:
            switch (numeroCurso) {
                case -1:
                    swapCards("right");
                    break;
            
                case 0:
                    swapCards("left");
                    break;

                case 1:
                    break;

                default:
                    break;
            }
            break;
        default:
            break;
    }
}

function swapCards(direction) {


    if (direction === "right") {
        tarjetaActual = (tarjetaActual < 1) ? tarjetaActual += 1 : tarjetaActual = -1;

    } else if(direction === "left"){
        tarjetaActual = (tarjetaActual > -1) ? tarjetaActual -= 1 : tarjetaActual = 1;
    }


    const currentCardEl = cardsContainerEl.querySelector(".current--card");
    const previousCardEl = cardsContainerEl.querySelector(".previous--card");
    const nextCardEl = cardsContainerEl.querySelector(".next--card");

    const currentBgImageEl = appBgContainerEl.querySelector(".current--image");
    const previousBgImageEl = appBgContainerEl.querySelector(".previous--image");
    const nextBgImageEl = appBgContainerEl.querySelector(".next--image");

    changeInfo(direction);
    swapCardsClass();

    removeCardEvents(currentCardEl);

    function swapCardsClass() {
        currentCardEl.classList.remove("current--card");
        previousCardEl.classList.remove("previous--card");
        nextCardEl.classList.remove("next--card");

        currentBgImageEl.classList.remove("current--image");
        previousBgImageEl.classList.remove("previous--image");
        nextBgImageEl.classList.remove("next--image");

        currentCardEl.style.zIndex = "50";
        currentBgImageEl.style.zIndex = "-2";

        if (direction === "right") {
            previousCardEl.style.zIndex = "20";
            nextCardEl.style.zIndex = "30";

            nextBgImageEl.style.zIndex = "-1";

            currentCardEl.classList.add("previous--card");
            previousCardEl.classList.add("next--card");
            nextCardEl.classList.add("current--card");

            currentBgImageEl.classList.add("previous--image");
            previousBgImageEl.classList.add("next--image");
            nextBgImageEl.classList.add("current--image");
        } else if (direction === "left") {
            previousCardEl.style.zIndex = "30";
            nextCardEl.style.zIndex = "20";

            previousBgImageEl.style.zIndex = "-1";

            currentCardEl.classList.add("next--card");
            previousCardEl.classList.add("current--card");
            nextCardEl.classList.add("previous--card");

            currentBgImageEl.classList.add("next--image");
            previousBgImageEl.classList.add("current--image");
            nextBgImageEl.classList.add("previous--image");
        }
    }
}

function changeInfo(direction) {
    let currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
    let previousInfoEl = cardInfosContainerEl.querySelector(".previous--info");
    let nextInfoEl = cardInfosContainerEl.querySelector(".next--info");

    
    gsap.timeline()
        .to([buttons.prev, buttons.next], {
            duration: 0.2,
            opacity: 0.5,
            pointerEvents: "none",
        })
        .to(
            currentInfoEl.querySelectorAll(".text"),
            {
                duration: 0.4,
                stagger: 0.1,
                translateY: "-120px",
                opacity: 0,
            },
            "-="
        )
        .call(() => {
            swapInfosClass(direction);
        })
        .call(() => initCardEvents())
        .fromTo(
            direction === "right"
                ? nextInfoEl.querySelectorAll(".text")
                : previousInfoEl.querySelectorAll(".text"),
            {
                opacity: 0,
                translateY: "40px",
            },
            {
                duration: 0.4,
                stagger: 0.1,
                translateY: "0px",
                opacity: 1,
            }
        )
        .to([buttons.prev, buttons.next], {
            duration: 0.2,
            opacity: 1,
            pointerEvents: "all",
        });

    function swapInfosClass() {
        currentInfoEl.classList.remove("current--info");
        previousInfoEl.classList.remove("previous--info");
        nextInfoEl.classList.remove("next--info");

        if (direction === "right") {
            currentInfoEl.classList.add("previous--info");
            nextInfoEl.classList.add("current--info");
            previousInfoEl.classList.add("next--info");
        } else if (direction === "left") {
            currentInfoEl.classList.add("next--info");
            nextInfoEl.classList.add("previous--info");
            previousInfoEl.classList.add("current--info");
        }
    }
}

// function updateCard(e) {
//     const card = e.currentTarget;
//     const box = card.getBoundingClientRect();
//     const centerPosition = {
//         x: box.left + box.width / 2,
//         y: box.top + box.height / 2,
//     };
//     let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
//     gsap.set(card, {
//         "--current-card-rotation-offset": `${angle}deg`,
//     });
//     const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
//     gsap.set(currentInfoEl, {
//         rotateY: `${angle}deg`,
//     });
// }

function resetCardTransforms(e) {
    const card = e.currentTarget;
    const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
    gsap.set(card, {
        "--current-card-rotation-offset": 0,
    });
    gsap.set(currentInfoEl, {
        rotateY: 0,
    });
}

function initCardEvents() {
    const currentCardEl = cardsContainerEl.querySelector(".current--card");
    // currentCardEl.addEventListener("pointermove", updateCard);
    currentCardEl.addEventListener("pointerout", (e) => {
        resetCardTransforms(e);
    });
}

initCardEvents();

function removeCardEvents(card) {
    // card.removeEventListener("pointermove", updateCard);
}

function init() {

    let tl = gsap.timeline();

    tl.to(cardsContainerEl.children, {
        delay: 0.15,
        duration: 0.5,
        stagger: {
            ease: "power4.inOut",
            from: "right",
            amount: 0.1,
        },
        "--card-translateY-offset": "0%",
    })
        .to(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
            delay: 0.5,
            duration: 0.4,
            stagger: 0.1,
            opacity: 1,
            translateY: 0,
        })
        .to(
            [buttons.prev, buttons.next],
            {
                duration: 0.4,
                opacity: 1,
                pointerEvents: "all",
            },
            "-=0.4"
        );
}

const waitForImages = () => {
    const images = [...document.querySelectorAll("img")];
    const totalImages = images.length;
    let loadedImages = 0;
    const loaderEl = document.querySelector(".loader span");

    gsap.set(cardsContainerEl.children, {
        "--card-translateY-offset": "100vh",
    });
    gsap.set(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
        translateY: "40px",
        opacity: 0,
    });
    gsap.set([buttons.prev, buttons.next], {
        pointerEvents: "none",
        opacity: "0",
    });

    images.forEach((image) => {
        imagesLoaded(image, (instance) => {
            if (instance.isComplete) {
                loadedImages++;
                let loadProgress = loadedImages / totalImages;

                gsap.to(loaderEl, {
                    duration: 2, // Change this to 2 seconds
                    scaleX: loadProgress,
                    backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
                });

                if (totalImages == loadedImages) {
                    gsap.timeline()
                        .to(".loading__wrapper", {
                            duration: 0.8,
                            opacity: 0,
                            pointerEvents: "none",
                        })
                        .call(() => init());
                }
            }
        });
    });
};

waitForImages();


function llevarACursos() {
    window.scrollTo(
        0, document.body.scrollHeight - 5, {
            behavior: 'smooth'
        }
        
    );
}


document.getElementById('newsletterLabel').addEventListener('click', function(event) {
    event.preventDefault();

    const targetElement = document.getElementById('lineaSeparadora');
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop,
        behavior: 'smooth'
      });
    }
  });

document.getElementById('cursosLabel').addEventListener('click', function(event) {
        event.preventDefault();

        const targetElement = document.getElementById('app');
        if (targetElement) {
            window.scrollTo({
            top: 0,
            behavior: 'smooth'
            });
        }
});


