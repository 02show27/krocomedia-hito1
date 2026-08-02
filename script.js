
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