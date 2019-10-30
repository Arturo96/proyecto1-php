<?php

if(isset($_POST)) {

    // Conectarse a la BD
    require_once './includes/conexion.php';

    // Borrar error anterior
    if(isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']);
    }

    // Recibir datos del formulario
    $email    = trim($_POST['emailLogin']);
    $password = $_POST['passwordLogin']; 

    $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";

    $login = mysqli_query($connection, $sql);

    if($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        var_dump($usuario);

        if(password_verify($password, $usuario['password'])) {
            // Establecer la sesión
            $_SESSION['usuario'] = $usuario;

            
        } else {
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = 'El usuario o la contraseña no son correctos.';
        }

    } else {
        $_SESSION['error_login'] = 'El usuario o la contraseña no son correctos.';
    }


    header('Location: index.php');

    // Iniciar sesión
    // if(!isset($_SESSION)) session_start();



    

}