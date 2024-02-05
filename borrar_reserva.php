<?php
// Verifica si se ha enviado un ID válido a través de la URL
if (isset($_GET['id'])) {
    $id_reserva = $_GET['id'];

    // Establece la conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "kutral");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Lógica para cargar los datos de la reserva con el ID proporcionado
    // ...

    // Verifica si se ha enviado el formulario de borrado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Realiza la eliminación de la reserva en la base de datos
        $query = "DELETE FROM reservas WHERE id = $id_reserva";
        if ($conexion->query($query) === TRUE) {
            echo "Reserva eliminada correctamente.";
            
            // Redirige a reservasclientes.php
            header("Location: reservasclientes.php");
            exit();
        } else {
            echo "Error al eliminar la reserva: " . $conexion->error;
        }
    }

    // Cierra la conexión
    $conexion->close();
} else {
    // Si no se proporcionó un ID válido, redirige a la página de administrador
    header("Location: reservasclientes.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (código del head) ... -->
</head>
<body>
    <!-- Mensaje de confirmación de borrado -->
    <p>¿Estás seguro de que quieres borrar esta reserva?</p>

    <!-- Formulario de confirmación de borrado -->
    <form id="formBorrado" method="post" action="">
        <!-- Botón de confirmar borrado -->
        <button type="submit">Sí, Borrar</button>
    </form>

    <!-- Botón para cancelar el borrado y volver a la página de administrador -->
    <a href="reservasclientes.php">Cancelar</a>
</body>
</html>
