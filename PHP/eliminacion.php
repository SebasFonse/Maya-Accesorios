<?php 

    include 'servidor.php';

    $NOMBRE = $_POST ['nombre'];
    $APELLIDO = $_POST ['apellido'];
    $NUMERO = $_POST ['telefono'];
    $CORREO = $_POST ['correo'];
    $CONTRASEÑA = $_POST ['contraseña'];

    $query = " DELETE  FROM clientes WHERE NOMBRE='$NOMBRE' AND APELLIDO='$APELLIDO' AND NUMERO='$NUMERO' AND CORREO='$CORREO' AND CONTRASEÑA='$CONTRASEÑA'";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert ("cliente eliminado exitosamente")
                window.location = "../eliminar_cliente.php";
            </script>         
        ';
    }else{
        echo'
        <script>
            alert ("intentelo de nuevo, usuario no eliminado")
            window.location = " ../eliminar_cliente.php";
        </script>         
    ';

    mysqli_close($conexion);
    }
?>