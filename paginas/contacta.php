<?php session_start(); ?>
<!DOCTYPE html>


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

<body class="container mt-3 fondo">

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
                                <!-- <a class="dropdown-item" href="productos/paginas/camisetas.php">Camisetas</a>
                                <a class="dropdown-item" href="productos/paginas/calzados.php">Calzados</a>
                                <a class="dropdown-item" href="productos/paginas/pantalones.php">Pantalones</a> -->
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

    <div class="text-center d-block mt105" id="contacta">
        <h1 class="text-white border border-primary bg-info" id="titulo">CONTACTA CON NOSOTROS</h1>
    </div>

    <div class="text-center" id="advanced-search-form">
        <h2>Rellena el formulario y podremos ponernos en contacto o resolverte cualquier duda</h2>
        <form name="email" action="../php/sendEmail.php" method="POST">
            <div class="form-group">
                <label for="first-name">Nombre</i>
                </label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="last-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="number">N&uacute;mero de telefono</label>
                <input type="number" class="form-control" placeholder="N&uacute;mero de telefono" name="numerotlf"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" placeholder="correo@correo.com" name="email" required>
            </div>

            <div class="form-group">
                <label for="text">¿En qu&eacute; podemos ayudarte?</label>
                <textarea class="form-control" rows="5" placeholder="Exp&oacute;n lo que necesitas." name="texto"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="enviar"> Enviar</button>
        </form>
        <?php
    if (isset($_SESSION['mensaje'])) : ?>
        <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
            <strong><?php echo $_SESSION['mensaje']; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="quitar()">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php unset($_SESSION['mensaje']); endif; ?>
    </div>

    <div class="text-center d-block mt-3" id="contacta">
        <h1 class="text-white border border-primary bg-info" id="titulo2">O VISITA NUESTRA TIENDA FÍSICA</h1>
    </div>

    <div class="d-flex justify-content-center m-3" >
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12680.42499474371!2d-2.153058168241359!3d37.3873195265538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd65362062ed19a7%3A0x904ac88dc59c2ed8!2zQWxib3gsIEFsbWVyw61h!5e0!3m2!1ses!2ses!4v1639144968339!5m2!1ses!2ses"
            width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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