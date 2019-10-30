<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Proyecto 1 - PHP</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <h1>Blog de Videojuegos</h1>
            </a>
        </div>

        <!-- Menu -->
        <nav class="menu-nav">
            <ul>
                
                <li class="menu-item"><a class="menu-link" href="index.php">Inicio</a></li>
                <?php 
                    $categorias = getCategories($connection);
                    if(!empty($categorias)):

                        while($categoria = mysqli_fetch_assoc($categorias)):  ?>
                        <li class="menu-item">
                            <a class="menu-link" href="index.php">
                                <?= $categoria['nombre'] ?>
                            </a>
                        </li>
                <?php endwhile; 
                    endif; ?>
                <li class="menu-item"><a class="menu-link" href="index.php">Sobre mí</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Contacto</a></li>
            </ul>
        </nav>



    </header>

    <main class="container">

        <section class="principal">