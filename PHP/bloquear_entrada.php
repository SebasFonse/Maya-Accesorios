<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("por favor inicia sesion ");
                window.location = "index.html";
            </script>

        ';
        session_destroy();
        die();
    }

?>