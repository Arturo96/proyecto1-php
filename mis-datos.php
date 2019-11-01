<?php
require_once './includes/redireccion.php';
require_once './includes/header.php';
?>

<!-- Contenido de MIS DATOS -->

<h2 class="data-title">Mis datos</h2>
<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'general') : ''; 
    if(isset($_SESSION['completed'])): ?>
    <div class="alerta alerta-exito">
        <?= $_SESSION['completed'] ?>
    </div>
<?php
    endif;?>


<form action="actualizar-usuario.php" method="post">

    <label>Nombre:
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" >
    </label>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>


    <label>Apellidos:
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>">
    </label>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

    <label>Correo:
        <input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>">
    </label>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

    <input type="submit" name="actualizar" value="Actualizar datos">
</form>

<!-- Fin contenido -->

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
borrarErrores();
?>