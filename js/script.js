document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("nombreForm");
  const inputNombre = document.getElementById("nombre");
  const error = document.getElementById("error");
  const saludo = document.getElementById("saludo");
  const nombreReves = document.getElementById("nombreReves");
  const titulo = document.getElementById("tituloPrincipal");

  const saludosTitulo = [
    "¡Bienvenid@",
    "¡Hola",
    "¡Hey",
    "¡Qué gusto verte",
    "¡Saludos"
  ];
  const saludosAbajo = [
    "Qué alegría verte por aquí",
    "Espero que disfrutes de la página",
    "Gracias por visitar mi sitio",
    "Pasa y ponte cómod@",
    "Que tengas un gran día"
  ];

  function invertirTexto(texto) {
    return texto.split("").reverse().join("");
  }

  function randomDe(lista) {
    const indice = Math.floor(Math.random() * lista.length);
    return lista[indice];
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const nombre = inputNombre.value.trim();

    if (nombre === "") {
      error.textContent = "Por favor, escribe tu nombre.";
      saludo.textContent = "";
      nombreReves.textContent = "";
      titulo.textContent = "¡Bienvenid@ a mi página web!";
      inputNombre.focus();
      return;
    }

    error.textContent = "";

    const nombreInvertido = invertirTexto(nombre);

    // título con saludo aleatorio + nombre al revés
    const saludoT = randomDe(saludosTitulo);
    titulo.textContent =
      saludoT + " " + nombreInvertido + " a mi página web!";


    // línea extra con el nombre al revés
    nombreReves.textContent = "Tu nombre al revés es: " + nombreInvertido;
  });
});
