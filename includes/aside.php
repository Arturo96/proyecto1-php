
<!-- BARRA LATERAL -->
<aside class="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
        <div class="block-aside user-logged">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>

            <!-- Botones -->

            <a href="" class="entry-button">Crear entradas</a>
            <a href="" class="category-button">Crear categoría</a>
            <a href="" class="data-button">Mis datos</a>
            <a href="cerrar.php" class="logout-button">Cerrar sesión</a>

        </div>

        

    <?php endif; ?>

    <div class="login block-aside">
        <h3>Identificate</h3>

        <?php if(isset($_SESSION['error_login'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login'] ?>
            </div>
        <?php endif; ?>

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
            <input type="submit" name='ingresar' value="Ingresar">
        </form>
    </div>

    <div class="register block-aside">

        <h3>Regístrate</h3>
        <!-- <div class="alerta alerta-exito">
                Alerta de exito
        </div> -->

        <!-- Mostrar errores -->
        <?php if (isset($_SESSION['completed'])) :   ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completed'] ?>
            </div>
            <?php elseif(isset($_SESSION['errores']['db'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['db'] ?>
            </div>
        <?php endif; ?>

        <form action="./includes/registro.php" method="POST">
            <div>
                <label>Nombre:
                    <input type="text" id="nombre" name="nombre">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            </div>
            <div>
                <label>Apellidos:
                    <input type="text" id="apellidos" name="apellidos">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            </div>
            <div>
                <label>Correo:
                    <input type="email" id="emailRegister" name="emailRegister">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            </div>
            <div>
                <label>Contraseña:
                    <input type="password" id="passwordRegister" name="passwordRegister">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            </div>

            <input type="submit" name="registrar" value="Registrarse">
        </form>
        <?php borrarErrores(); ?>
    </div>

</aside>