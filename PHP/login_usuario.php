<?php 

    session_start();

    include 'servidor.php';

    $usuario = $_POST ['usuario'];
    $contraseña = $_POST ['contraseña'];
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM login_registro WHERE USUARIO='$usuario' and CONTRASEÑA='$contraseña'");

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../inicio.php");
        exit;
    }else{
        echo '
        
        <script>
            alert ("usuario no exixte, porfavor verifique los datos introducidos");
            window.location = "../index.php"; 
        </script> 

        ';
        exit;
    }

?>