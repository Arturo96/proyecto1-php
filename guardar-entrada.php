<?php
require_once './includes/redireccion.php';

if (isset($_POST)) {

    // Conectarse a la BD
    require_once './includes/conexion.php';

    $category = isset($_POST['new-category']) ? mysqli_real_escape_string($connection, $_POST['new-category']) : false;

    // Validar errores

    $errores = [];

    // Validar el nombre de la categoría

    if (empty($category) || is_numeric($category) || preg_match('/[0-9]/', $category)) {
        $errores['category'] = 'El nombre de la categoría no es válido.';
        
    } else {
        $sql = "INSERT INTO categorias VALUES (null, '$category');";
        mysqli_query($connection,$sql);
        $_SESSION['completed'] = 'Categoría insertada correctamente.';
    }
}

header('Location: crear-categoria.php');
