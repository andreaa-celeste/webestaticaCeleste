document.getElementById("cambiar").addEventListener("click", function() {
  const mensajes = [
    "¡Qué gusto verte por aquí!",
    "¡Espero que tengas un gran día!",
    "¡Gracias por visitar mi sitio!",
    "¡Disfruta explorando mi página!"
  ];

  const mensajeActual = document.getElementById("mensaje");
  const nuevoMensaje = mensajes[Math.floor(Math.random() * mensajes.length)];
  mensajeActual.textContent = nuevoMensaje;
});
