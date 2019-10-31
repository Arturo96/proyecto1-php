<?php
require_once './includes/redireccion.php';
require_once './includes/header.php';
?>

<!-- CAJA PRINCIPAL -->

<div class="add-entry">
    <h2>Crear entrada</h2>

    <p class="entry-message">Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.</p>

    <form action="guardar-entrada.php" method="POST">

        <label>Título de la entrada:
            <input type="text" name='title-entry'>
        </label>

        <!-- Mensaje de error -->

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'title_entry' ) : '';
        ?>
        
        <label>Descripción:
            <textarea name="description-entry" rows="10"></textarea>
        </label>

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'description_entry' ) : '';
        ?>
        
        <label>Categoría:
            <select name="category-entry">
                <?php
                $categories = getCategories($connection);
                if(!empty($categories)):
                    while ($category = mysqli_fetch_assoc($categories)) : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['nombre'] ?></option>
                    <?php
                    endwhile; 
                endif; ?>
            </select>
        </label>

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'category_entry' ) : '';
        ?>

        <input type="submit" name="submit-entry" value="Guardar entrada">

        <?php if (isset($_SESSION['completed'])) : ?>
            <div class="alerta alerta-exito"><?= $_SESSION['completed'] ?></div>
        <?php endif; ?>
    </form>
</div>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
borrarErrores();
?>