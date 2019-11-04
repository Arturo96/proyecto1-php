<?php
$location = 'index.php';
if (isset($_SESSION['usuario'])) {
    require_once './includes/conexion.php';
    require_once './includes/helpers.php';
    
    $id_entry = (int) $_GET['id'];
    $entry = getEntryById($connection, $id_entry);
    if (!empty($entry)) {
        $sql = "DELETE FROM entradas WHERE id = $id_entry";

        $query = mysqli_query($connection, $sql);

        if ($query) {
            $_SESSION['completed'] = 'Entrada borrada correctamente';
        } else {
            $_SESSION['errores']['delete'] = 'Error al borrar la entrada: ' . mysqli_error($connection);
            $location = "detalle-entrada.php?id=$id_entry";
        }
    }
}


header("Location: $location");
