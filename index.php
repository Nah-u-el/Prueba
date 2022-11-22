
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="uno">
            <label><strong>INGRESE SUS DATOS</strong></label>
        <fieldset>
        <form method="post" action="Validar.php" id="uno">
            <label>Usuario</label>
            <br>
            <input type="text" name="usuario" id="usuario" placeholder="ingrese su usuario" required>
            <br>
            <label>Contraseña</label>
            <br>
            <input type="password" name="pass" id="pass" placeholder="ingrese su contraseña" required>
            <p>
                <button type="submit" name="Enviar" value="ENVIAR" class="submit">Entrar</button>
                <button type="reset" name="Limpiar" value="LIMPIAR" class="reset">Limpiar</button>
            </p>
        </form>
        </fieldset>
            <form action="invitado.html" method="post">
            <p>
                Ingresar como "Invitado"
            </p>
            <button type="submit" name="Ingresar" value="INVITADO" class="invitado">Invitado</button>
            </form>
            </div>
    </body>
</html>
