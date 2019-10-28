<?php
if(isset($_POST['registrar'])) {

    // Recoger los valores del formulario de registro
    $nombre    = isset($_POST['nombre']) ? $_POST['nombre'] : false; 
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $correo    = isset($_POST['emailRegister']) ? $_POST['emailRegister'] : false; 
    $password  = isset($_POST['passwordRegister']) ? $_POST['passwordRegister'] : false; 
}
var_dump($nombre);
var_dump($apellidos);
var_dump($correo);
var_dump($password);

// Array de errores

$errores = [];

// Validar los datos

if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)) {
    $nombre_validate = true;
    echo 'El nombre es válido';
} else {
    $nombre_validate = false;

    $errores['nombre'] = 'Nombre inválido';

}