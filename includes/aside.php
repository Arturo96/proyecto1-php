<?php require_once './includes/helpers.php'; ?>

<!-- BARRA LATERAL -->
<aside class="sidebar">
    <div class="login block-aside">
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

    <div class="register block-aside">
        
        <h3>Regístrate</h3>
        <form action="./includes/registro.php" method="POST">
            <div>
                <label>Nombre: 
                    <input type="text" id="nombre" name="nombre">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre' ) : ''; ?>
            </div>
            <div>
                <label>Apellidos:
                    <input type="text" id="apellidos" name="apellidos">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos' ) : ''; ?>
            </div>
            <div>
                <label>Correo:
                    <input type="email" id="emailRegister" name="emailRegister">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email' ) : ''; ?>
            </div>
            <div>
                <label>Contraseña:
                    <input type="password" id="passwordRegister" name="passwordRegister">
                </label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password' ) : ''; ?>
            </div>

            <input type="submit" name="registrar" value="Registrarse">
        </form>
        <?php borrarErrores(); ?>
    </div>

</aside>