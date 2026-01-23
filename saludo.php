<?php
// Arrays de saludos
$saludosTitulo = [
    "¡Bienvenid@",
    "¡Hola",
    "¡Hey",
    "¡Qué gusto verte",
    "¡Saludos"
];

$saludosAbajo = [
    "Qué alegría verte por aquí",
    "Espero que disfrutes de la página",
    "Gracias por visitar mi sitio",
    "Pasa y ponte cómod@",
    "Que tengas un gran día"
];

// Variables por defecto
$error = "";
$saludoTitulo = "¡Bienvenid@ a mi página web!";
$nombreReves = "";
$saludoAbajo = "";

// Función para invertir texto
function invertirTexto($texto) {
    return strrev($texto);
}

// Función para obtener un elemento aleatorio
function randomDe($lista) {
    return $lista[array_rand($lista)];
}

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);

    if ($nombre === "") {
        $error = "Por favor, escribe tu nombre.";
    } else {
        $nombreInvertido = invertirTexto($nombre);
        $saludoRandom = randomDe($saludosTitulo);
        $saludoFinal = randomDe($saludosAbajo);

        $saludoTitulo = $saludoRandom . " " . $nombreInvertido . " a mi página web!";
        $nombreReves = "Tu nombre al revés es: " . $nombreInvertido;
        $saludoAbajo = $saludoFinal;
    }
}
?>