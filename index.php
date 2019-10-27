<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Proyecto 1 - PHP</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <h1>Blog de Videojuegos</h1>
            </a>
        </div>

        <!-- Menu -->
        <nav class="menu-nav">
            <ul>
                <li class="menu-item"><a class="menu-link" href="index.php">Inicio</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Categoría 1</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Categoría 2</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Categoría 3</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Categoría 4</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Sobre mí</a></li>
                <li class="menu-item"><a class="menu-link" href="index.php">Contacto</a></li>
            </ul>
        </nav>

        

    </header>

    <main class="container">
            <!-- BARRA LATERAL -->
            <aside class="sidebar">
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <div>
                            <label>Email:
                                <input type="email" id="emailLogin" name="emailLogin">
                            </label>
                        </div>
                        <div>
                            <label>Contraseña:
                                <input type="password" id="passwordLogin" name="passwordLogin">
                            </label>
                        </div>
                        <input type="submit" value="Ingresar">
                    </form>
                </div>

                <div id="register" class="block-aside">
                    <h3>Regístrate</h3>
                    <form action="register.php" method="POST">
                        <div>
                            <label>Nombre:
                                <input type="text" id="nombre" name="nombre">
                            </label>
                        </div>
                        <div>
                            <label>Apellidos:
                                <input type="text" id="apellidos" name="apellidos">
                            </label>
                        </div>
                        <div>
                            <label>Correo:
                                <input type="email" id="emailRegister" name="emailRegister">
                            </label>
                        </div>
                        <div>
                            <label>Contraseña:
                                <input type="password" id="passwordRegister" name="passwordRegister">
                            </label>
                        </div>

                        <input type="submit" value="Registrarse">
                    </form>
                </div>

            </aside>

            <!-- CAJA PRINCIPAL -->

            <section class="principal">
                <h2>Últimas entradas</h2>
                <article class="entrada">
                    <h3 class="titulo-entrada">Entrada 1</h3>
                    <p class="desc-entrada">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et vero doloremque quasi, aperiam atque necessitatibus in eos eveniet temporibus? Magnam earum delectus fugit ipsa repudiandae alias exercitationem dignissimos ratione.
                        Quas et dolor aliquam, obcaecati doloremque maxime iste aliquid eligendi vitae non modi iusto vel atque at, distinctio, consequatur quae reprehenderit? Eius perferendis hic vel eligendi neque impedit fugit eveniet.
                        Maiores provident adipisci architecto ex praesentium expedita laborum. Dolor iste provident incidunt pariatur ut fuga quas quia optio vel est officia, nobis repellat quo exercitationem aliquid, dolorum voluptatem. Non, sint?
                        Soluta, quasi possimus ad in cupiditate aspernatur tempora? Sint, tempora accusamus quae autem cumque, repellat, quibusdam excepturi ducimus corporis delectus vitae reprehenderit! Eveniet perspiciatis suscipit quis delectus dignissimos harum doloremque!</p>
                </article>
                <article class="entrada">
                    <h3 class="titulo-entrada">Entrada 2</h3>
                    <p class="desc-entrada">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, enim ut eaque, non obcaecati dolorem aperiam a aspernatur inventore beatae ipsam praesentium esse dolorum odio consequuntur ad at cupiditate facere?
                        Porro laboriosam asperiores illum possimus dignissimos, distinctio vitae earum! Asperiores fugit nisi deleniti nesciunt aperiam, impedit alias quos esse dignissimos earum, perspiciatis facere harum, ipsum voluptatem accusamus non. Nisi, ex!
                        Consequuntur eaque, facilis excepturi sit enim sequi. Modi corrupti quis voluptates? Quidem obcaecati animi, consequuntur, reiciendis consequatur perspiciatis pariatur rerum cumque tempora nisi, hic architecto temporibus velit ut nostrum corporis.</p>
                </article>
                <article class="entrada">
                    <h3 class="titulo-entrada">Entrada 3</h3>
                    <p class="desc-entrada">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, omnis unde facilis nostrum neque aperiam ad qui itaque veniam recusandae repudiandae eum numquam deserunt quisquam asperiores, vitae adipisci perferendis quibusdam.Itaque quo repudiandae impedit nesciunt non cupiditate sapiente esse modi, pariatur obcaecati illum exercitationem saepe ab. Totam vero saepe quaerat ullam molestias, voluptatem illum, hic rerum commodi delectus reprehenderit magni!</p>
                </article>



            </section>



        </main>

        <footer>
            <p>Carlos Arturo Vargas &copy; 2019. Copyright</p>
        </footer>

</body>

</html>