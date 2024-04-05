    <?php

    include("header.php");


    $nombr_usr = filter_var($_POST['nombre-usr'], FILTER_SANITIZE_SPECIAL_CHARS) ;
    $pass_usr = filter_var($_POST['pass-login'], FILTER_SANITIZE_SPECIAL_CHARS);


    if(isset($nombr_usr) && isset($pass_usr)){

    $bienvenida= generar_html_bienvenida($nombr_usr);
    echo $bienvenida;

    }

    function generar_html_bienvenida($nombre_usr) {
        return "<div><p>Bienvenido, $nombre_usr </p></div>";
    }


