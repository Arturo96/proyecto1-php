<?php 
require_once './includes/header.php';
?>

<h2>Todas las entradas</h2>

<?php 
            $entries = getEntries($connection);
            if(!empty($entries)):
                while($entry = mysqli_fetch_assoc($entries)): ?>
                    <article class="entrada">
                    <a href="detalle-entrada.php?id=<?= $entry['id'] ?>">
                            <h3 class="titulo-entrada"><?= $entry['titulo'] ?></h3>
                            <span class="date"><?= $entry['categoria'].' | '.$entry['fecha']. ' | ' ?></span>
                            <?php if(isset($_SESSION['usuario'])): ?>
                                <a href="editar-entrada.php?id=<?= $entry['id'] ?>">Editar</a>
                            <?php endif; ?>    
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