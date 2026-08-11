const botonModo = document.querySelector("#btn-modo");
const cuerpo = document.body;

botonModo.addEventListener("click", () => {

    cuerpo.classList.toggle("oscuro");

    if (cuerpo.classList.contains("oscuro")) {
        botonModo.textContent = "Modo Claro";
    } else {
        botonModo.textContent = "Modo Oscuro";
    }

});


const menuToggle = document.getElementById("menuToggle");
const menu = document.getElementById("menu");

menuToggle.addEventListener("click", function () {

    menu.classList.toggle("active");

});



const formulario = document.querySelector("#contactForm");

const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const correo = document.querySelector("#correo");
const telefono = document.querySelector("#telefono");
const mensaje = document.querySelector("#mensaje");


formulario.addEventListener("submit", function (event) {

    const nombreValor = nombre.value.trim();
    const apellidoValor = apellido.value.trim();
    const correoValor = correo.value.trim();
    const telefonoValor = telefono.value.trim();
    const mensajeValor = mensaje.value.trim();




    if (nombreValor === "") {

        event.preventDefault();

        alert("Por favor, ingresa tu nombre.");

        return;
    }


 

    if (apellidoValor === "") {

        event.preventDefault();

        alert("Por favor, ingresa tu apellido.");

        return;
    }



    if (!correoValor.includes("@")) {

        event.preventDefault();

        alert("Ingresa un correo válido. Debe contener una arroba (@).");

        return;
    }



    if (telefonoValor === "") {

        event.preventDefault();

        alert("Por favor, ingresa tu teléfono.");

        return;
    }


  
    if (mensajeValor === "") {

        event.preventDefault();

        alert("Por favor, ingresa tu requerimiento.");

        return;
    }


});