<?php

include 'PHP/bloquear_entrada.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAYA ACCESORIOS</title>
    <link rel="stylesheet" href="CSS/deliminar.css">
</head>
<body>
    
    <div class="titulo">
        <h1>MAYA ACCESORIOS</h1>
        <a  href="PHP/cerrar_sesion.php">cerrar sesion</a>
    </div>
    

    <div class="modulos">
        <form>

            <!-- PRIMER MODULO -->
            <br><a type="uno" href="ingreso_cliente.php">INGRESAR NUEVO CLIENTE</a><br>

            <!-- SEGUNDO MODULO -->
            <br><a type="dos" href="eliminar_cliente.php">ELIMINAR CLIENTE</a><br>

            <!-- TERCER MODULO -->
            <br><a type="tres" href="agregar_producto.php">AGREGAR NUEVO PRODUCTO</a><br>

            <!-- CUARTO MODULO -->
            <br><a type="cuatro" href=eliminar_producto.php">ELIMINAR PRODUCTO</a><br>
            
        </form> 
    </div>

    <div class="eliminar_cliente">
        <form action="PHP/eliminacion.php" method="POST">
            
            <!-- nombre-->
            <br><label for="nombre">NOMBRE DEL CLIENTE</label>
            <br><input type="text" placeholder="" name="nombre" autofocus><br>

            <!-- Apellido-->
            <br><label for="Apellido">APELLIDOS</label>
            <br><INput type="text" placeholder="" name="apellido"></br>

            <!-- numero -->
            <br><label for="numero">NUMERO TELEFONICO</label>
            <br><input type="tel" placeholder="" name="telefono"><br>

            <!-- correo -->
            <br><label for="numero">CORREO ELECTRONICO</label>
            <br><input type="email" placeholder="" name="correo"><br>

            <!-- contraseña-->
            <br><label for="contraseña">CONTRASEÑA</label>
            <br><input type="password" placeholder="" name="contraseña"><br>

            <!-- boton -->
            <br><input type="submit" value="eliminar"><br>

        </form>

    </div>

</body>
</html>