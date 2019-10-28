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

            <input type="submit" name="registrar" value="Registrarse">
        </form>
    </div>

</aside>