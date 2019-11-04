<?php
    
    require_once './includes/header.php';
    if(isset($_POST['busqueda'])) {
        $content = isset($_POST['content']) ? mysqli_real_escape_string($connection, $_POST['content']) : ''; 
    } else {
        header('Location: index.php');
    }
?>

<h2>Búsquedas relacionadas con "<?= $content ?>"</h2>

<?php 
            $entriesByContent = getEntriesByContent($connection, $content);
            if(!empty($entriesByContent)):
                while($entryByContent = mysqli_fetch_assoc($entriesByContent)): ?>
                    <article class="entrada">
                        <a href="detalle-entrada.php?id=<?= $entryByContent['id'] ?>">
                            <h3 class="titulo-entrada"><?= $entryByContent['titulo'] ?></h3>
                            <span class="date"><?= $entryByContent['categoria'].' | '.$entryByContent['fecha']. ' | '.$entryByContent['usuario'].' | ' ?></span>
                            <?php if(isset($_SESSION['usuario'])): ?>
                                <a href="editar-entrada.php?id=<?= $entryByContent['id'] ?>">Editar</a>
                            <?php endif; ?>             
                            <p class="desc-entrada">
                                <?php 
                                    echo substr($entryByContent['descripcion'], 0, 300);
                                    if(strlen($entryByContent['descripcion']) > 100) echo '...';
                                ?>
                            </p>
                        </a>
                    </article>
        <?php   endwhile;
            else: 
                echo "<p class='empty-entries'>No hay entradas correspondientes al contenido solicitado.</p>";
             endif;  
require_once './includes/aside.php';
require_once './includes/footer.php';
?>