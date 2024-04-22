<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
</head>

<body>
    <form action="" method="post">
        <h2>Hola</h2>
        <p>Inica tu registro</p>

        <div class="input_wrapper">
            <input type="text" name="nombre" placeholder="Nombre">
            <img class="input-icon" src="img\name.svg" alt="" />
        </div>

        <div class="input_wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="img\email.svg" alt="" />
        </div>

        <div class="input_wrapper">
            <input type="text" name="direccion" placeholder="Direccion">
            <img class="input-icon" src="img\direction.svg" alt="" />
        </div>

        <div class="input_wrapper">
            <input type="tel" name="telefono" placeholder="Telefono">
            <img class="input-icon" src="img\phone.svg" alt="" />
        </div>

        <div class="input_wrapper">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <img class="input-icon" src="img\password.svg" alt="" />
        </div>
        <input class="btn" type="submit"  name="registrar" value="Enviar">
    </form>
</body>
    <?php
        include("registrar.php");
    ?>
    <script>
        alert("Hola Mundo")
    </script>
</html>