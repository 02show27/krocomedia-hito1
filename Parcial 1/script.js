
document.addEventListener("DOMContentLoaded", function () {

  const btnConfirmar = document.querySelector("#btn-confirmar");


  function confirmarTurno() {
    const mensajeP = document.querySelector("#mensaje");
    mensajeP.textContent = "Turno recibido - Enseguida te atiende Jhonny Tito Castro";
    mensajeP.classList.remove("oculto");
  }

  btnConfirmar.addEventListener("click", confirmarTurno);
});