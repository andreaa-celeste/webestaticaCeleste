<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Bienvenid@ a mi página web</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <h1 class="titulo" id="tituloPrincipal">
        <?php echo $saludoTitulo; ?>
    </h1>
    <div class="card">
        <img src="img/foto.png" alt="Dinosaurio" class="dino" />
        <form method="POST" action="index.php">
            <input
                type="text"
                name="nombre"
                id="nombre"
                placeholder="Escribe tu nombre"
                autocomplete="off"
            />
            <button type="submit">Enviar</button>
        </form>
        <?php if ($nombreReves): ?>
            <p id="nombreReves" class="saludo"><?php echo $nombreReves; ?></p>
        <?php endif; ?>
        <?php if ($error): ?>
            <p id="error" class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        

    </div>

  <p class="autor">Creado por: Andrea Celeste</p>

  <script src="script.php"></script>
</body>
</html>
