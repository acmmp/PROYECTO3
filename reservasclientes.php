<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservas.css">




    <title>Document</title>
</head>
<body>
<?php require("headadmin.php"); ?>


<main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Administrador | Reservas Clientes</h2>
            <ul class="x">
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
                $sql_reservas = "SELECT * FROM reservas";
                $result_reservas = $conexion->query($sql_reservas);

                // Muestra las reservas del usuario
                while ($row_reserva = $result_reservas->fetch_assoc()) {
                    echo "<table border='1' class='center-table'>";
echo "<tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Hora de la reserva</th>
        <th>Número de comensales</th>
        <th>Estado reserva</th>
        <th>Editar</th>
        <th>Borrar</th>
        
      </tr>";

// Iterar a través de las filas de resultados
while ($row_reserva = $result_reservas->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row_reserva['nombre'] . "</td>";
    echo "<td>" . $row_reserva['telefono'] . "</td>";
    echo "<td>" . $row_reserva['email'] . "</td>";
    echo "<td>" . $row_reserva['hora_entrada'] . "</td>";
    echo "<td>" . $row_reserva['num_comensales'] . "</td>";
    echo "<td>" . $row_reserva['estado_reserva'] . "</td>";
     // Añadir icono de editar con la imagen de fondo.jpg
     echo "<td><a href='editar_reserva.php?id=" . $row_reserva['id'] . "'><img src='img/edit.png' alt='Editar' ></a></td>";
    
     // Añadir icono de borrar con la imagen de fondo.jpg
     echo "<td><a href='borrar_reserva.php?id=" . $row_reserva['id'] . "'><img src='img/basura.png' ></a></td>";
 

     // Añadir icono de confirmar con la imagen de fondo.jpg
    // echo "<td><a href='confirmar_reserva.php?id=" . $row_reserva['id'] . "'><img src='img/aceptar.png' alt='confirmar' ></a></td>";
    echo "<td><a href='confirmar_reserva.php?id=" . $row_reserva['id'] . "&email=" . $row_reserva['email'] . "'><img src='img/aceptar.png' alt='confirmar'></a></td>";
    echo "<td><a href='rechazar_reserva.php?id=" . $row_reserva['id'] . "&email=" . $row_reserva['email'] . "'><img src='img/delete.png' alt='eliminar'></a></td>";
    

     echo "</tr>";
}

// Fin de la tabla
echo "</table>";}

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