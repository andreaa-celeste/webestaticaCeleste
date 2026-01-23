<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Bienvenid@ a mi página web</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <h1 class="titulo" id="tituloPrincipal">
        ¡Bienvenid@ a mi página web!
    </h1>
    <div class="card">
        <img src="img/foto.png" alt="Dinosaurio" class="dino" />
        <form method="POST" action="saludo.php">
            <input
                type="text"
                name="nombre"
                id="nombre"
                placeholder="Escribe tu nombre"
                autocomplete="off"
            />
            <button type="submit">Enviar</button>
        </form>
    </div>

    <p class="autor">Creado por: Andrea Celeste</p>
</body>
</html>