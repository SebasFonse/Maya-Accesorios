<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAYA ACCESORIOS</title>
    <link rel="stylesheet" href="CSS/dregistro.css">
</head>
<body>
    <div class="register-box">
        <img class="avatar" src="IMG/logo.jpeg" alt="">
        <h1>REGISTRO</h1>
        <form action="PHP/Registro_usuario.php" method="POST">

            <!-- Nombre-->
            <br><label for="nombre">NOMBRE COMPLETO</label>
            <br><input type="text" name="nombre" autofocus><br>

            
            <!-- usuario-->
            <br><label for="nombre">NOMBRE DE USUARIO</label>
            <br><input type="text" name="usuario" ><br>

            <!-- correo electronico-->
            <br><label for="correo">CORREO ELECTRONICO</label>
            <br><input type="email" name="correo"><br>
            
            <!-- contraseña-->
            <br><label for="contraseña">CONTRASEÑA</label>
            <br><input type="password" name="contraseña"><br>

            <!-- boton -->
            <br><input type="submit" value="ingresar"><br>

            <a href="index.php">YA TENGO CUENTA</a>

        </form>

    </div>
</body>
</html>