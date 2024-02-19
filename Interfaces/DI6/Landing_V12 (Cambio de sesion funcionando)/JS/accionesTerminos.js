/* =================================================================== */
                            // FOOTER
/* =================================================================== */

//Enlaces
const enlaceAvisoLegal = document.getElementById("enlaceAvisoLegal");
const enlaceCondiciones = document.getElementById("enlaceCondiciones");
const enlaceTerminosServicio = document.getElementById("enlaceTerminosServicio");
const enlacePoliticaPrivacidad = document.getElementById("enlacePoliticaPrivacidad");

//Textos
const avisoLegal = document.getElementById("avisoLegal");
const condicinonesUso = document.getElementById("condicinonesUso");
const politicaPrivacidad = document.getElementById("politicaPrivacidad");
const terminosServicio = document.getElementById("terminosServicio");

enlaceAvisoLegal.addEventListener("click", function() {
    avisoLegal.style.display == "none" ? avisoLegal.style.display = "flex" : avisoLegal.style.display = "none";
    condicinonesUso.style.display = "none";
    politicaPrivacidad.style.display = "none";
    terminosServicio.style.display = "none";
});

enlaceCondiciones.addEventListener("click", function() {
    avisoLegal.style.display = "none";
    condicinonesUso.style.display == "none" ? condicinonesUso.style.display = "flex" : condicinonesUso.style.display = "none";
    politicaPrivacidad.style.display = "none";
    terminosServicio.style.display = "none";
});

enlacePoliticaPrivacidad.addEventListener("click", function() {
    avisoLegal.style.display = "none";
    condicinonesUso.style.display = "none";
    politicaPrivacidad.style.display == "none" ? politicaPrivacidad.style.display = "flex" : politicaPrivacidad.style.display = "none";
    terminosServicio.style.display = "none";
});

enlaceTerminosServicio.addEventListener("click", function() {
    avisoLegal.style.display = "none";
    condicinonesUso.style.display = "none";
    politicaPrivacidad.style.display = "none";
    terminosServicio.style.display == "none" ? terminosServicio.style.display = "flex" : terminosServicio.style.display = "none";
});