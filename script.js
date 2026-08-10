
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

/* 09/08/2026 Mensajes de confirmacion */

const formulario = document.querySelector("#contactForm");

const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const correo = document.querySelector("#correo");
const telefono = document.querySelector("#telefono");

const formMensaje = document.querySelector("#formMensaje");


formulario.addEventListener("submit", function (event) {

  event.preventDefault();

  const nombreValor = nombre.value.trim();
  const apellidoValor = apellido.value.trim();
  const correoValor = correo.value.trim();
  const telefonoValor = telefono.value.trim();

  formMensaje.textContent = "";

  formMensaje.classList.remove("mostrar", "error", "exito");




  if (nombreValor === "") {

    formMensaje.textContent =
      "Por favor, ingresa tu nombre.";

    formMensaje.classList.add(
      "mostrar",
      "error"
    );

    return;
  }

  
  if (apellidoValor === "") {

    formMensaje.textContent =
      "Por favor, ingresa tu apellido.";

    formMensaje.classList.add(
      "mostrar",
      "error"
    );

    return;
  }


  if (!correoValor.includes("@")) {

    formMensaje.textContent =
      "Ingresa tu correo porfavor - El correo debe contener una arroba (@).";

    formMensaje.classList.add(
      "mostrar",
      "error"
    );

    return;
  }

  if (!telefonoValor) {

    formMensaje.textContent =
      "Ingresa tu teléfono porfavor.";

    formMensaje.classList.add(
      "mostrar",
      "error"
    );

    return;
  }

  formMensaje.textContent =
    "¡Formulario enviado correctamente!";

  formMensaje.classList.add(
    "mostrar",
    "exito"
  );

});