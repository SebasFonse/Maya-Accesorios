<?php 

    include 'servidor.php';

    $NOMBRE= $_POST ['nombre'];
    $CATEGORIA = $_POST ['categoria'];
    $CANTIDAD= $_POST ['cantidad'];

    $query = " DELETE  FROM productos WHERE NOMBRE_DEL_PRODUCTO='$NOMBRE' AND CATEGORIA='$CATEGORIA' AND CANTIDAD='$CANTIDAD'";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert ("producto eliminado exitosamente")
                window.location = "../eliminar_producto.html";
            </script>         
        ';
    }else{
        echo'
        <script>
            alert ("intentelo de nuevo, producto no eliminado")
            window.location = " ../eliminar_producto.html";
        </script>         
    ';

    mysqli_close($conexion);
    }
?>