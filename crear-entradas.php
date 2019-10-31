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
        
        <label>Descripción:
            <textarea name="description-entry" rows="10"></textarea>
        </label>
        
        <label>Usuario:
            <select name="user-entry" class="user-entry">
                <?php
                $users = getUsers($connection);
                while ($user = mysqli_fetch_assoc($users)) : ?>

                    <option value="<?= $user['id'] ?>"><?= $user['apellidos'].' '.$user['nombre'] ?></option>
                <?php endwhile; ?>
            </select>
        </label>

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