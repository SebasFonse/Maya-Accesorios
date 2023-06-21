<?php
    
    include 'servidor.php';

    $Nombre_completo = $_POST ['nombre'];
    $usuario = $_POST ['usuario'];
    $correo = $_POST ['correo'];
    $contraseña = $_POST ['contraseña'];

    $query = "INSERT INTO login_registro(NOMBRE_COMPLETO, USUARIO, CORREO, CONTRASEÑA) 
        VALUES ('$Nombre_completo','$usuario', '$correo', '$contraseña')";

    //verificcar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM login_registro WHERE correo='$correo'" );

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert ("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "registro.php"; 
        </script>     
         ';

        exit();
    }

     //verificcar que el usuario no se repita en la base de datos
     $verificar_usuario = mysqli_query($conexion,"SELECT * FROM login_registro WHERE usuario='$usuario'" );

     if(mysqli_num_rows($verificar_usuario) > 0){
         echo '
         <script>
             alert ("Este usuario ya esta registrado, intenta con otro diferente");
             window.location = "../registro.php"; 
         </script>     
          ';
 
         exit();
     }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert ("usuario almacenado exitosamente");
                window.location = "../index.php";   
            </script>
        
        ';
    }else{
        echo '
            <script>
                alert ("intentelo de nuevo, usuario no alamcenado");
                window.location = "../index.php";   
            </script>
        
        ';

    mysqli_close($conexion);
    }

?>