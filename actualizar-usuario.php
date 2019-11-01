<?php 

require_once './includes/redireccion.php';

if(isset($_POST)) {

    // Conectarse a la BD

    require_once './includes/conexion.php';

    // Recoger el id del usuario por medio de la sesión

    $id = (int) $_SESSION['usuario']['id'];

    // Recibir los campos del formulario de actualización de usuario

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($connection, $_POST['nombre']) : ''; 
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($connection, $_POST['apellidos']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connection, $_POST['email']) : '';

    // Crear el arreglo de errores

    $errores = [];

    // Validar los campos

        // Validar nombre

        if(empty($nombre) || is_numeric($nombre) || preg_match('/[0-9$"!#%&()=?¡]/', $nombre)) {
            $errores['nombre'] = 'El nombre ingresado no es válido.';
        }

        // Validar apellidos

        if(empty($apellidos) || is_numeric($apellidos) || preg_match('/[0-9]/', $apellidos)) {
            $errores['apellidos'] = 'Los apellidos ingresados no son válidos.';
        }

        // Validar correo

        if(empty($email) || is_numeric($email)) {
            $errores['email'] = 'El correo ingresado no es válido.';
        }

    if(count($errores) == 0) {

        $sql = "UPDATE usuarios set
                    nombre    = '$nombre',
                    apellidos = '$apellidos',
                    email     = '$email'   
                WHERE id = '$id'";

        $result = mysqli_query($connection, $sql);

        if(!empty(mysqli_error($connection))) {
            echo (mysqli_error($connection));
            die();
        } elseif($result) {
            echo 'Usuario actualizado correctamente';
            die();
        } else {
            $_SESSION['errores']['general'] = 'Fallo al actualizar el usuario';
        }

        header('Location: index.php');       
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: mis-datos.php');
    }



}


    
