<?php
    
    include 'servidor.php';
    
    $NOMBRE= $_POST ['nombre'];
    $CATEGORIA = $_POST ['categoria'];
    $CANTIDAD= $_POST ['cantidad'];

    $query = "INSERT INTO productos(NOMBRE_DEL_PRODUCTO, CATEGORIA, CANTIDAD) 
    VALUES ('$NOMBRE','$CATEGORIA', '$CANTIDAD')";
    
    //verificcar que el prodcuto no se repita en la base de datos
    $verificar_producto = mysqli_query($conexion,"SELECT * FROM productos WHERE NOMBRE_DEL_PRODUCTO='$NOMBRE'" );

    if(mysqli_num_rows($verificar_producto) > 0){
        echo '
        <script>
            alert ("Este producto ya esta registrado, intenta con otro diferente");
            window.location = "../agregar_producto.php"; 
        </script>     
         ';

        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
    echo '
        <script>
            alert ("producto almacenado exitosamente");
            window.location = "../agregar_producto.php";   
        </script>
    
    ';
    }else{
    echo '
        <script>
            alert ("intentelo de nuevo, producto no alamcenado");
            window.location = "agregar_producto.php";   
        </script>
    
    ';

    mysqli_close($conexion);
    }

?>
