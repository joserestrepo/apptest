<?php session_start();
    if(isset($_POST['cerrarSesion'])){
        unset($_SESSION['usuario']);
        header('Location:home');
    }

    if($titulo == "Test" && !isset($_SESSION['usuario'])){
        header('Location:login');
    }
    if($titulo == "Login" && isset($_SESSION['usuario'])){
        header('Location:test');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icono.jpg"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="js/sweetAlert.js"></script>
    <link rel="stylesheet" href="css/loading.css">
    <?php if($titulo == "Login") {
        ?>
            <link rel="stylesheet" href="css/style.login.css">
        <?php
        }?>
    <link rel="stylesheet" href="css/style.css">
    
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <header>
        <div id="navegador">
        <nav class="navbar navbar-expand-lg navbar-light fondo-negro texto-blanco text-center">
            <div class="container">
                <img src="img/icononavar.jpg" alt="" class="imgnav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify fa-lg" style="color: white;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item">
                        <a class=" ml-3 nav texto-blanco text-center" href="home">Incio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class=" ml-3 nav-item active">
                        <a class="nav texto-blanco text-center" href="test">Test</a>
                    </li>
                    </ul>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <ul class="navbar-nav text-rigth">
                        <li class="nav-item">
                            <?php
                                if(!isset($_SESSION['usuario'])){
                                   ?> 
                                   <a class="ml-3 nav texto-blanco text-center" href="login">Login</a>
                                   <?php 
                                }else{
                                    ?>
                                    <form role="form" method="POST">
                                        <p class="d-inline-block"><?php echo $_SESSION['usuario'];?> &nbsp; -</p>
                                        <button type="submit" class="pt-2 btn btn-primary d-inline-block" name="cerrarSesion" id="cerrarSession">CERRAR SESION</button>
                                    </form>
                                    <?php
                                }
                            ?>  
                        </li>
                    </ul>
                </div>
            </div>    
            </nav>
        </div>
    </header>
    <div id="contenedor_carga">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>
    <section>