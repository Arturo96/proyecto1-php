<?php

function mostrarError($errores,$campo) {
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    } 

    return $alerta;
}

function borrarErrores() {
    
    if(isset($_SESSION['errores'])) $_SESSION['errores'] = null;
    if(isset($_SESSION['completed'])) $_SESSION['completed'] = null;
    if(isset($_SESSION['error_login'])) $_SESSION['error_login'] = null;
    
    unset($_SESSION['errores']);
    unset($_SESSION['completed']);
    unset($_SESSION['error_login']);


}

function getCategories($connection) {
    $sql = "SELECT * FROM categorias;";

    $categorias = mysqli_query($connection, $sql);

    $result = [];

    if($categorias && mysqli_num_rows($categorias) >= 1 ) {
        $result = $categorias;
    }

    return $result;
}

function getLastEntries($connection) {
    $sql = "SELECT e.*, c.nombre AS categoria FROM entradas e
                JOIN categorias c ON e.categoria_id = c.id ORDER BY e.fecha DESC LIMIT 5;";

    $lastEntries = mysqli_query($connection, $sql);

    $result = [];

    if($lastEntries && mysqli_num_rows($lastEntries) >= 1) {
        $result = $lastEntries;
    }
    
    return $result;

}

function getUsers($connection) {
    $sql = 'SELECT * FROM usuarios ORDER BY apellidos';

    $users = mysqli_query($connection, $sql);

    $result = [];

    if($users && mysqli_num_rows($users) >= 1) {
        $result = $users;
    }

    return $result;
}

