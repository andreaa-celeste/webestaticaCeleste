document.getElementById("formulario").addEventListener("submit", function(event) {
  event.preventDefault();

  const valor = document.getElementById("campoTexto").value.trim();
  const respuesta = document.getElementById("respuesta");

  if (valor) {
    const procesado = valor.split('').reverse().join('');
    respuesta.textContent = `Tu nombre al revés es: "${procesado}"`;
  } else {
    respuesta.textContent = "Por favor, escribe algo antes de enviar.";
  }
});