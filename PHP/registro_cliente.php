<?php 

    include 'servidor.php';

    $NOMBRE = $_POST ['nombre'];
    $APELLIDO = $_POST ['apellido'];
    $NUMERO = $_POST ['telefono'];
    $CORREO = $_POST ['correo'];
    $CONTRASEÑA = $_POST ['contraseña'];

    $query = " INSERT INTO clientes ( NOMBRE, APELLIDO, NUMERO, CORREO, CONTRASEÑA) 
    VALUES ('$NOMBRE', '$APELLIDO', '$NUMERO', '$CORREO', '$CONTRASEÑA')";

    //vereficar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo='$CORREO'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
            alert ("Este cliente ya se encuentra registrado en la base de datos")
            window.location = " ../ingreso_cliente.php";
        </script>         
    ';

    exit();

    }
    //vereficar que el correo no se repita en la base de datos
    $verificar_telefono = mysqli_query($conexion, "SELECT * FROM clientes WHERE numero='$NUMERO'");

    if(mysqli_num_rows($verificar_telefono) > 0){
        echo'
        <script>
            alert ("Este cliente ya se encuentra registrado en la base de datos")
            window.location = " ../ingreso_cliente.php";
        </script>         
    ';

    exit();
    }
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert ("cliente almacenado exitosamente")
                window.location = "../ingreso_cliente.php";
            </script>         
        ';
    }else{
        echo'
        <script>
            alert ("intentelo de nuevo, usuario no alamacenado")
            window.location = " ../ingreso_cliente.php";
        </script>         
    ';

    mysqli_close($conexion);
    }
?>