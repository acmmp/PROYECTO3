<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">

    <title>Restaurante</title>
</head>
<body>
<?php require("head_userregistrados.php"); ?>

<main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Información de Reservas</h2>
            <ul class="fondo">
                <?php
                session_start(); // Asegúrate de iniciar la sesión en la parte superior del script

                // Verifica si el usuario ha iniciado sesión
                if (!isset($_SESSION['id_usuario'])) {
                    header("Location: login.php"); // Redirige a la página de inicio de sesión si no ha iniciado sesión
                    exit();
                }

                // Establece la conexión a la base de datos
                $conexion = new mysqli("localhost", "root", "", "kutral");

                // Consulta para obtener las reservas del usuario actual
                $id_usuario = $_SESSION['id_usuario'];
                $sql_reservas = "SELECT * FROM reservas WHERE id_usuario = '$id_usuario'";
                $result_reservas = $conexion->query($sql_reservas);

                // Muestra las reservas del usuario
                while ($row_reserva = $result_reservas->fetch_assoc()) {
                    echo "<li>";
                    echo "<strong>Nombre:</strong> " . $row_reserva['nombre'] . "<br>";
                    echo "<strong>Teléfono:</strong> " . $row_reserva['telefono'] . "<br>";
                    echo "<strong>Email:</strong> " . $row_reserva['email'] . "<br>";
                    echo "<strong>Hora de la reserva:</strong> " . $row_reserva['hora_entrada'] . "<br>";
                    echo "<strong>Número de comensales:</strong> " . $row_reserva['num_comensales'] . "<br>";
                    echo "<strong>Estado reserva:</strong> " . $row_reserva['estado_reserva'] . "<br>";
                    echo "</li>";
                }

                // Cierra la conexión
                $conexion->close();
                ?>
            </ul>
        </div>
    </section>
</main>

<?php require("footer.php"); ?>

</body>
</html>
