<?php
include("conexion.php");

if (isset($_POST["registrar"])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['contrasena']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $contrasena = trim($_POST['contrasena']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contrasena, fecha)
                VALUES('$nombre', '$email', '$direccion', '$telefono', '$contrasena', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
?>
            <h3 class="succes">Tu registro se ah completado</h3>
        <?php
        } else {
            echo ("Hola oisdoiu");
        ?>
            <h3 class="error">Ocurrio un herror</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todo los campos por favor</h3>
<?php
    }
}
