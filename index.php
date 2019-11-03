<?php require_once './includes/header.php'; ?>

    <!-- CAJA PRINCIPAL -->

    
        <h2>Últimas entradas</h2>

        <?php 

            $lastEntries = getEntries($connection, 'LIMIT 5');
            if(!empty($lastEntries)):
                while($lastEntry = mysqli_fetch_assoc($lastEntries)): ?>

                    <article class="entrada">
                        <a href="detalle-entrada.php?id=<?= $lastEntry['id'] ?>">
                            <h3 class="titulo-entrada"><?= $lastEntry['titulo'] ?></h3>
                            <span class="date"><?= $lastEntry['categoria'].' | '.$lastEntry['fecha']. ' | ' ?></span>
                            <?php if(isset($_SESSION['usuario'])): ?>
                                <a href="editar-entrada.php?id=<?= $lastEntry['id'] ?>">Editar</a>
                            <?php endif; ?>                           
                            <p class="desc-entrada">
                                <?php 
                                    echo substr($lastEntry['descripcion'], 0, 300);
                                    if(strlen($lastEntry['descripcion']) > 100) echo '...';
                                ?>
                            </p>
                        </a>
                    </article>

        <?php   endwhile;
            endif; ?>
            
        <div class="ver-entradas">
            <a href="entradas.php">Ver todas las entradas</a>
        </div>


    <?php require_once './includes/aside.php'; ?>



<?php require_once './includes/footer.php'; ?>

