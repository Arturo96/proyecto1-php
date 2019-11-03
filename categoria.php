<?php
require_once './includes/header.php';
$categoria = getCategoryById($connection, $_GET['id']);
if(empty($categoria)) header('Location: index.php');

?>

<h2>Entradas de <?= $categoria['nombre'] ?></h2>

<?php 
            $entriesByCategory = getEntriesByCategory($connection, (int) $categoria['id']);
            if(!empty($entriesByCategory)):
                while($entryByCategory = mysqli_fetch_assoc($entriesByCategory)): ?>
                    <article class="entrada">
                        <a href="detalle-entrada.php?id=<?= $entryByCategory['id'] ?>">
                            <h3 class="titulo-entrada"><?= $entryByCategory['titulo'] ?></h3>
                            <span class="date"><?= $entryByCategory['categoria'].' | '.$entryByCategory['fecha']. ' | '.$entryByCategory['usuario'].' | ' ?></span>
                            <?php if(isset($_SESSION['usuario'])): ?>
                                <a href="editar-entrada.php?id=<?= $entryByCategory['id'] ?>">Editar</a>
                            <?php endif; ?>             
                            <p class="desc-entrada">
                                <?php 
                                    echo substr($entryByCategory['descripcion'], 0, 300);
                                    if(strlen($entryByCategory['descripcion']) > 100) echo '...';
                                ?>
                            </p>
                        </a>
                    </article>
        <?php   endwhile;
            else: 
                echo "<p class='empty-entries'>No hay entradas correspondientes a esta categoría.</p>";
             endif; ?>

<?php
require_once './includes/aside.php';
require_once './includes/footer.php';
?>