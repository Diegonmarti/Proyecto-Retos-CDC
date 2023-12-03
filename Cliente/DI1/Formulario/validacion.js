
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
    espacioParaMensajeDeError.textContent = mensajeErrorAMostrar;
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
function detectarCambiosNombre(mostrarErrores){
    var esValido = false;
    var nombre = document.getElementById("nombre").value;
    var nombreError = document.getElementById("nombreError");
    var nombreInput = document.getElementById("nombre");

    if (nombre.trim() === "") {
        if (mostrarErrores) indicarInvalidez(nombreInput, nombreError, "Campo obligatorio.");

    } else if ((nombre.trim().split(" ").length - 1) > 1){
        if (mostrarErrores) indicarInvalidez(nombreInput, nombreError, "El nombre solo puede estar compuesto de dos palabras");

    } else if (!/^[a-zA-Z ]*$/.test(nombre)) {
        if (mostrarErrores) indicarInvalidez(nombreInput, nombreError, "El nombre solo debe contener letras y espacios.");

    } else{
        indicarValidez(nombreInput, nombreError);
        esValido = true;
    }

    return esValido;
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
function detectarCambiosEmail(mostrarErrores) {
    var esValido = false;
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    var emailInput = document.getElementById("email");

    if (email.trim() === "") {
        if (mostrarErrores) indicarInvalidez(emailInput, emailError, "Campo obligatorio.");

    } else if (!email.includes("@") || !email.split("@")[1].includes(".") || email.trim().includes(" ")) {
        if (mostrarErrores) indicarInvalidez(emailInput, emailError, "El correo debe contener al menos un '@', un punto y no contener espacios");

    } else {
        indicarValidez(emailInput, emailError);
        esValido = true;
    }

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
function detectarCambiosContrasenia(mostrarErrores) {
    var esValido = false;
    var contrasenia = document.getElementById("contrasenia").value;
    var contraseniaError = document.getElementById("contraseniaError");
    var contraseniaInput = document.getElementById("contrasenia");

    if (contrasenia === "") {
        if (mostrarErrores) indicarInvalidez(contraseniaInput, contraseniaError, "Campo obligarorio.");    

    } else if (contrasenia.length < 8) {
        if (mostrarErrores) indicarInvalidez(contraseniaInput, contraseniaError, "La contraseña debe contener al menos 8 caracteres.");

    } else if(!/[0-9]/.test(contrasenia)){
        if (mostrarErrores) indicarInvalidez(contraseniaInput, contraseniaError, "La contraseña debe contener al menos un número.");

    } else {
        indicarValidez(contraseniaInput, contraseniaError);
        esValido = true;
    }

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
function detectarCambiosRepetirContrasenia(mostrarErrores) {
    var esValido = false;
    var contrasenia = document.getElementById("contrasenia").value;
    var repetirContrasenia = document.getElementById("repetirContrasenia").value;
    var repetirContraseniaError = document.getElementById("repetirContraseniaError");
    var repetirContraseniaInput = document.getElementById("repetirContrasenia");

    if(repetirContrasenia === ""){
        if (mostrarErrores) indicarInvalidez(repetirContraseniaInput, repetirContraseniaError, "Campo obligatorio.");

    } else if (repetirContrasenia !== contrasenia) {
        if (mostrarErrores) indicarInvalidez(repetirContraseniaInput, repetirContraseniaError, "Las contraseñas no coinciden.");        

    } else {
        indicarValidez(repetirContraseniaInput, repetirContraseniaError);
        esValido = true;
    }

    return esValido;
}

function comprobarTodosBien(mostrarErrores) {
    var formularioError = document.getElementById("formularioError");
    var boton = document.getElementById("enviar");
    var contador = 0;

    detectarCambiosNombre(mostrarErrores)               ? contador ++ : null;
    detectarCambiosEmail(mostrarErrores)                ? contador ++ : null; 
    detectarCambiosContrasenia(mostrarErrores)          ? contador ++ : null;    
    detectarCambiosRepetirContrasenia(mostrarErrores)   ? contador ++ : null;  
    
    if (contador == 4) {
        boton.disabled = false;
        formularioError.textContent = "";

    } else {
        boton.disabled = true;
        if(mostrarErrores) formularioError.textContent = "Existen errores en el formulario. Revisa los datos que has introducido";
    }
}
