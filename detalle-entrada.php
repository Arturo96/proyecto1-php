<?php
require_once './includes/header.php';
$id_entry = (int) $_GET['id'];
$entry = getEntryById($connection, $id_entry);

if(empty($entry)) header('Location: index.php');
?>

<h2 class="entry-title"><?= $entry['titulo'] ?></h2>

<div class="container-entry">
    <div class="header-entry">
        <h3 class="category"><span>Categoría: </span> 
            <a href="categoria.php?id=<?= $entry['categoria_id'] ?>">
                <?= $entry['categoria'] ?>
            </a>
        </h3>
        
        <h3 class="date"><?= $entry['fecha'] ?></h3>
    </div>
    
    <?php if(isset($_SESSION['usuario'])): ?>
        <div class="buttons-entry">
            <a href="editar-entrada.php?id=<?= $id_entry ?>" class="update-button">Editar</a>    
            <a href="borrar-entrada.php?id=<?= $id_entry ?>" class="delete-button">Eliminar</a>
        </div>
    <?php endif; ?> 
</div>

<p class="description-entry"><?= $entry['descripcion'] ?></p>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
?>