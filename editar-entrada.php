<?php 
    require_once './includes/redireccion.php';
    require_once './includes/header.php';

    $id_entry = $_GET['id'];
    $entry = getEntryById($connection, $id_entry);
    if(empty($entry)) header('Location: index.php');
?>

<!-- CAJA PRINCIPAL -->

<div class="add-entry">
    <h2>Editar entrada</h2>

    <form action="guardar-entrada.php" method="POST">

        <input type="hidden" name="id-entry" value="<?= $entry['id'] ?>">

        <label>Título de la entrada:
            <input type="text" name='title-entry' value="<?= $entry['titulo'] ?>">
        </label>

        <!-- Mensaje de error -->

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'title_entry' ) : '';
        ?>
        
        <label>Descripción:
            <textarea name="description-entry" rows="10"><?= $entry['descripcion'] ?></textarea>
        </label>

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'description_entry' ) : '';
        ?>
        
        <label>Categoría:
            <select name="category-entry">
                <?php
                $categories = getCategories($connection);
                if(!empty($categories)):
                    $category_entry = $entry['categoria_id'];
                    while ($category = mysqli_fetch_assoc($categories)) : 
                        if($category_entry == $category['id']): ?> 
                            <option value="<?= $category['id'] ?>" selected ><?= $category['nombre'] ?></option>
                <?php   else: ?>
                            <option value="<?= $category['id'] ?>"><?= $category['nombre'] ?></option>
                <?php   endif;
                    endwhile; 
                endif; ?>
            </select>
        </label>

        <?php 
            echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'category_entry' ) : '';
        ?>

        <?php if (isset($_SESSION['completed'])) : ?>
            <div class="alerta alerta-exito"><?= $_SESSION['completed'] ?></div>
        <?php endif; ?>

        <input type="submit" name="submit-entry" value="Actualizar entrada">

        
    </form>
</div>

<?php 
    require_once './includes/aside.php';
    require_once './includes/footer.php';
    borrarErrores();
?>

