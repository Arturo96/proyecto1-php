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
    
    unset($_SESSION['errores']);
    unset($_SESSION['completed']);
    unset($_SESSION['error_login']);

}