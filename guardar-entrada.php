<?php
require_once './includes/redireccion.php';

if (isset($_POST)) {

    // Conectarse a la BD
    require_once './includes/conexion.php';

    // Recibir los datos del formulario

    $title_entry = isset($_POST['title-entry']) ? mysqli_real_escape_string($connection, $_POST['title-entry']) : false;

    $description_entry = isset($_POST['description-entry']) ? mysqli_real_escape_string($connection, $_POST['description-entry']) : false;

    $user_entry = $_SESSION['usuario']['id'];

    $category_entry = isset($_POST['category-entry']) ? (int) mysqli_real_escape_string($connection, $_POST['category-entry']) : false;

    // Validar errores

    $errores = [];

    // Validar el titulo de la entrada

    if (empty($title_entry)) {
        $errores['title_entry'] = 'Rellena el título de la entrada.';
    } 

    // Validar la descripción

    if(empty($description_entry)) {
        $errores['description_entry'] = 'Rellena la descripción de la entrada.';
    }

    // Validar el id de la categoría

    if(empty($category_entry) || !is_numeric($category_entry)) {
        $errores['category_entry'] = 'La categoría ingresada no es válida';
    }
    
    // Si no hay errores, se inserta la entrada en la BD
    
    if(count($errores) == 0) {
        $sql = "INSERT INTO entradas VALUES (null, $user_entry, $category_entry, '$title_entry', '$description_entry', CURDATE());";
         mysqli_query($connection,$sql);
         $_SESSION['completed'] = 'Entrada insertada correctamente.';
    } else {
        $_SESSION['errores'] = $errores;
    }
    
}

header('Location: crear-entradas.php');
