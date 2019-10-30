<?php
require_once './includes/redireccion.php';
require_once './includes/header.php';
?>

<!-- CAJA PRINCIPAL -->

<div class="add-category">
    <h2>Crear categoría</h2>
    
    <p class="category-message">Añade nuevas categorías al blog para que los usuarios puedan usarlas al crear sus entradas.</p>
    
    <form action="guardar-categoria.php" method="POST">
    
        <label>Nombre de la categoría:
            <input type="text" name='new-category' >
        </label>
    
        <input type="submit" name="submit-category" value="Guardar categoría">

        <?php if(isset($_SESSION['completed'])): ?>
            <div class="alerta alerta-exito"><?= $_SESSION['completed'] ?></div>
        <?php endif; ?>
    </form>
</div>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
borrarErrores();
?>