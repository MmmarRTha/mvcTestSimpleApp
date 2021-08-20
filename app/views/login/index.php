<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<main class="contenedor">
    <form class="formulario" method="POST" action="">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <div class="center alerta-login">
            </div>
            <div class="campo">
                <label class="center" for="nUsuario">Identificador de usuario:</label>
                <input class="input-text" type="text" id="nUsuario" name="nUsuario" placeholder="Identificador de usuario" required>
            </div>
            <div class="campo">
                <label class="center" for="contrasena">Contraseña:</label>
                <input class="input-text" type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
            </div>
        </fieldset>
        <input type="hidden" name="token_response" id="token_response">
        <div class="align-center flex">
            <input class="boton w-sm-100" type="submit" value="Iniciar sesión">
        </div>
    </form>
</main>
</body>
</html>