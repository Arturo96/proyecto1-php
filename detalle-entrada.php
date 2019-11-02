<?php
require_once './includes/header.php';
$entry = getEntryById($connection, (int) $_GET['id']);

if(empty($entry)) header('Location: index.php');
?>

<h2 class="entry-title"><?= $entry['titulo'] ?></h2>

<h3 class="category"><span>Categoría: </span> 
    <a href="categoria.php?id=<?= $entry['categoria_id'] ?>">
        <?= $entry['categoria'] ?>
    </a>
</h3>

<h3 class="date"><?= $entry['fecha'] ?></h3>

<p class="description-entry"><?= $entry['descripcion'] ?></p>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
?>