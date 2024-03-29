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

function getCategoryById($connection, $id) {
    $sql = "SELECT * FROM categorias WHERE id = $id;";

    $categoria = mysqli_query($connection, $sql);

    $result = [];

    if($categoria && mysqli_num_rows($categoria) == 1 ) {
        $result = mysqli_fetch_assoc($categoria);
    }

    return $result;
}



function getEntries($connection, $limit = null) {
    $sql = "SELECT e.*, c.nombre AS categoria, CONCAT(u.apellidos,' ', u.nombre) AS usuario FROM entradas e
                JOIN categorias c ON e.categoria_id = c.id
                JOIN usuarios   u ON e.usuario_id   = u.id ORDER BY e.fecha DESC ".$limit.";";
                
    $lastEntries = mysqli_query($connection, $sql);

    $result = [];

    if($lastEntries && mysqli_num_rows($lastEntries) >= 1) {
        $result = $lastEntries;
    }
    
    return $result;

}

function getEntryById($connection, $entry_id) {
    $sql = "SELECT e.*, c.nombre AS categoria, CONCAT(u.apellidos,' ', u.nombre) AS usuario FROM entradas e
                JOIN categorias c ON e.categoria_id = c.id
                JOIN usuarios   u ON e.usuario_id   = u.id
            WHERE e.id = $entry_id";

    $entry = mysqli_query($connection, $sql);

    $result = [];

    if($entry && mysqli_num_rows($entry) == 1) {
        $result = mysqli_fetch_assoc($entry);
    }

    return $result;
}

function getEntriesByCategory($connection, $id, $limit = null) {
    $sql = "SELECT e.*, c.nombre AS categoria, CONCAT(u.apellidos,' ', u.nombre) AS usuario FROM entradas e
                JOIN categorias c ON e.categoria_id = c.id 
                JOIN usuarios   u ON e.usuario_id   = u.id
            WHERE c.id = $id 
            ORDER BY e.fecha DESC ".$limit.";";
                
    $entriesByCategory = mysqli_query($connection, $sql);

    $result = [];

    if($entriesByCategory && mysqli_num_rows($entriesByCategory) >= 1) {
        $result = $entriesByCategory;
    }
    
    return $result;
}

function getEntriesByContent($connection, $content) {
    $sql = "SELECT e.*, c.nombre AS categoria, CONCAT(u.apellidos,' ', u.nombre) AS usuario FROM entradas e
                JOIN categorias c ON e.categoria_id = c.id 
                JOIN usuarios   u ON e.usuario_id   = u.id
            WHERE  e.titulo LIKE '%$content%' 
                OR e.descripcion LIKE '%$content%'
            ORDER BY e.fecha DESC;";
                
    $entriesByContent = mysqli_query($connection, $sql);

    $result = [];

    if($entriesByContent && mysqli_num_rows($entriesByContent) >= 1) {
        $result = $entriesByContent;
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

