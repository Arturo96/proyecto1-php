<?php

session_start();

if (isset($_POST['registrar'])) {

    // Recoger los valores del formulario de registro
    $nombre    = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email    = isset($_POST['emailRegister']) ? $_POST['emailRegister'] : false;
    $password  = isset($_POST['passwordRegister']) ? $_POST['passwordRegister'] : false;
}

// Array de errores

$errores = [];

// Validar los datos

// Validar nombre

if (!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)) {
    $nombre_validate = true;
    echo '<h3>El nombre es válido</h3>';
} else {
    $nombre_validate = false;

    $errores['nombre'] = 'Nombre inválido';
}

// Validar apellidos

if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $apellidos)) {
    $apellidos_validate = true;
    echo '<h3>El apellido es válido</h3>';
} else {
    $apellidos_validate = false;

    $errores['apellidos'] = 'apellido inválido';
}

// Validar correo

if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validate = true;
    echo '<h3>El email es válido</h3>';
} else {
    $email_validate = false;

    $errores['email'] = 'El email no es válido';
}

if (!empty($password)) {
    $password_validate = true;
    echo '<h3>El password es válido</h3>';
} else {
    $password_validate = false;

    $errores['password'] = 'password inválido';

    echo '<h3>' . var_dump($errores) . '</h3>';
}

$guardar_usuario = false;

if (count($errores) == 0) {
    // Insertar en la BD
    $guardar_usuario = true;

    // Cifrar la contraseña
    $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

} else { 
    $_SESSION['errores'] = $errores;
    header('Location: ../index.php');

}
