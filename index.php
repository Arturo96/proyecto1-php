<?php require_once './includes/header.php'; ?>

<main class="container">

    <!-- CAJA PRINCIPAL -->

    <section class="principal">

        <h2>Últimas entradas</h2>

        <?php 

            $lastEntries = getLastEntries($connection);
            if(!empty($lastEntries)):
                while($lastEntry = mysqli_fetch_assoc($lastEntries)): ?>

                    <article class="entrada">
                        <a href="">
                            <h3 class="titulo-entrada"><?= $lastEntry['titulo'] ?></h3>
                            <span class="date"><?= $lastEntry['categoria'].' | '.$lastEntry['fecha'] ?></span>
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
            <a href="">Ver todas las entradas</a>
        </div>



    </section>

    <?php require_once './includes/aside.php'; ?>

</main>

<?php require_once './includes/footer.php'; ?>

