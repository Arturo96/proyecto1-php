<?php
require_once './includes/header.php';
$categoria = getCategoryById($connection, $_GET['id']);
if(empty($categoria)) header('Location: index.php');

?>

<h2>Entradas de <?= $categoria['nombre'] ?></h2>

<?php 
            $entriesByCategory = getEntries($connection);
            if(!empty($entries)):
                while($entry = mysqli_fetch_assoc($entries)): ?>
                    <article class="entrada">
                        <a href="">
                            <h3 class="titulo-entrada"><?= $entry['titulo'] ?></h3>
                            <span class="date"><?= $entry['categoria'].' | '.$entry['fecha'] ?></span>
                            <p class="desc-entrada">
                                <?php 
                                    echo substr($entry['descripcion'], 0, 300);
                                    if(strlen($entry['descripcion']) > 100) echo '...';
                                ?>
                            </p>
                        </a>
                    </article>

        <?php   endwhile;
            endif; ?>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
?>