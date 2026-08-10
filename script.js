
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