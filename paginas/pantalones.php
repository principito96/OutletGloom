<!DOCTYPE html>

<?php

session_start();

use Clases\Pantalones;

require "../src/Pantalones.php";

$pantalones = new Pantalones();
$todos = $pantalones->mostrar();
$pantalones = null;

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Fotos/logo2-nav.png" type="image/x-icon">
    <title>Outlet Glom</title>
    <link rel="stylesheet" href="../estilos/estilos.css" type="text/css">
    <link rel="stylesheet" href="../estilos/formulario.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body class="container mt-3 fondo ">
    <div class="text-center">
        <nav class="navbar fixed-top navbar-expand-lg colores" id="nav">
            <div class="container">
                <a class="navbar-brand" href="../../index.html"><img src="../Fotos/logo2-nav.png" style="width: 165px;"
                        alt=""></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown separator">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-cubes"></i>
                                Productos
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="sudaderas.php">Sudaderas</a>
                                <a class="dropdown-item" href="vestidos.php">Vestidos</a>
                                <a class="dropdown-item" href="pantalones.php">Pantalones</a>
                            </div>
                        </li>
                        <li class="nav-item separator">
                            <a class="nav-link" href="contacta.php" id="navbar2"><i class="fas fa-users"></i>
                                Contacta</a>
                        </li>
                        <?php
                            if (!empty($_SESSION["usuario"])) {
                        ?>
                        <li class="nav-item separator">
                            <a class="nav-link" href="salir.php" id="navbar4"><i class="fas fa-sign-in-alt"></i>
                                Logout</a>
                        </li>
                        <?php }else { ?>
                        <li class="nav-item separator">
                            <a class="nav-link" href="login.php" id="navbar4"><i class="fas fa-sign-out-alt"></i></i>
                                Login</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <div class="text-center d-block" style="margin-top: 120px;">
        <h1 class="card text-white border-primary bg-info" id="titulo">Pantalones</h1>
        <h5 class="card text-dark border-info bg-transparent" id="texto3">
            EN ESTA SECCIÓN TE ENCONTRARÁS CON LOS PANTALONES QUE DISPONEMOS EN ESTA TEMPORADA
        </h5>
    </div>

    <?php
            if(isset($_SESSION['mensaje'])){
                if ($_SESSION['mensaje'] === "Vestido Borrado Correctamente"){
                    echo "<p class='my-2 text-light bg-danger p-4'>{$_SESSION['mensaje']}</p>";
                }else{
                    echo "<p class='my-2 text-light bg-success p-4'>{$_SESSION['mensaje']}</p>";
                }
                unset($_SESSION['mensaje']);
            }
        ?>
    <div class="row" id="tarjeta">
        <?php foreach ($todos as $key) { ?>

        <?php 
                $array = explode("+",$key->foto);
            ?>

        <div class="product-card col-md-4">

            <div id="<?php echo "car".$key->id ?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php for($i=0;$i<sizeof($array);$i++): ?>
                    <?php if($i==0):?>
                    <div class="carousel-item active">
                        <?php else : ?>
                        <div class="carousel-item">
                            <?php endif?>
                            <img class="fotos mx-auto d-block" src="<?php echo $array[$i]?>">
                        </div>
                        <?php endfor?>
                    </div>
                </div>

                <h1 id="price"><?php echo $key->precio ?>€</h1>

                <p id="desc">Stock disponible: (<?php echo $key->stock ?>)</p>

                <p id="name"><?php echo $key->nombre ?></p>

                <p id="desc"><?php echo $key->descripcion ?></p>

                <?php
                if (!empty($_SESSION["usuario"])) {
                ?>
                <div id="botones">
                    <?php                  
                    echo "<form name='b' action='borrarPantalon.php' method='POST' class='form from-inline'>\n";
                    echo "<a href='crearPantalones.php' class='btn btn-success mr-2'>Crear</a>";
                    echo "<a href='editarPantalon.php?id={$key->id}' class='btn btn-info mr-2'>Editar</a>";
                    echo "<input type='hidden' name='id' value='{$key->id}'>\n";
                    echo "<input type='submit' class='btn btn-danger' value='Borrar'>\n";
                    echo "</form>\n";
                    ?>
                </div>

                <?php } ?>
            </div>

            <?php } ?>


        </div>



        <footer class="page-footer small colores pt-3 mt-2" id="pie">

            <div class="container text-center text-md-left">

                <div class="row">

                    <div class="col-md-4 mx-auto">

                        <h6 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">Outlet Glom</h6>
                        <hr>
                        <p>Outlet Glom nació con el fin de ofrecer un servicio rápido y eficaz a nuestros clientes.
                            <a href="../../index.html" id="texto1">Mas informaci&oacute;n</a>
                        </p>

                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase font-weight-bold">Informaci&oacute;n de Contacto</h6>
                        <hr>
                        <p>
                            <i class="fas fa-home mr-3"></i> Albox (Almeria)
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> outletglom@gmail.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> 610 42 77 08
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> 950 04 17 63
                        </p>
                        <p>¿Necesitas mas informaci&oacuten? <a href="contacta.php" id="texto2">Pincha aqu&iacute;</a>
                        </p>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="footer-copyright text-center py-3 col">© Outlet Glom 2021 Copyright Todos los derechos
                        reservados.
                        <a href="../legales/avisolegal.html" id="aviso">T&eacute;rminos legales.</a>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                onclick="productos(this)">
                            <label class="custom-control-label float-right" for="customSwitch1">Modo Oscuro</label>
                        </div>
                    </div>
                </div>
        </footer>

        <script src="../js/index.js"></script>
</body>

</html>