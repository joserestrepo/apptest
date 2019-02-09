<?php
    $titulo;
    $vista;
    $urlAux = $_GET['url'];
    $url = rtrim($urlAux, '-');

    // Validando URL
    $url = filter_var($url, FILTER_SANITIZE_URL);

    //Le paso un delimitador y la cadena
    $url = explode('-', $url);

    if(isset($_GET['url'])){
        if($_GET['url'] == "home"){
            $titulo = 'Home';
            $vista = 'php/view/home.php';
        }
        if($_GET['url'] == "test"){
            $titulo = 'Test';
            $vista = 'php/view/test.php';
        }
        if($_GET['url'] == "login"){
            $titulo = 'Login';
            $vista = 'php/view/login.php';
        }
        if($_GET['url'] == "controladorLogin"){
            $titulo = 'controlador';
            $vista = 'php/controller/controller.login.php';
        }
        if($_GET['url'] == "CerrarSesio"){
            $titulo = 'Cerrar sesion';
            $vista = 'php/controller/controller.cerrrarSesion.php';
        }
        if($url[0] == "resultados"){
            $titulo = 'Resultados';
            $vista = 'php/view/resultados.php';
        }
    }else{
        $titulo = 'Home';
        $vista = 'php/view/home.php';
    }
?>