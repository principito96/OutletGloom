<!DOCTYPE html>
<?php
session_start();

//comprobar que es el admin el que va a hacer algo
if (empty($_SESSION["usuario"])) {
    header("Location: login.php");
    die();
}

if (!isset($_GET['id']) && (!isset($_POST['id']))) {
    header("Location:../../index.html");
    die();
}
require "../vendor/autoload.php";
require "../src/Vestidos.php";

use Clases\Vestidos;

$miVestidoId = $_GET['id'];

$miVestido = new Vestidos();
$miVestido->setId($miVestidoId);
$miVestidoDatos = $miVestido->read();

$precio = $miVestidoDatos->precio;
$nombre = $miVestidoDatos->nombre;
$descripcion = $miVestidoDatos->descripcion;
$stock = $miVestidoDatos->stock;
$foto = $miVestidoDatos->foto;

function mostrarError($texto)
{
    $_SESSION['error'] = $texto;
    header("Location:{$_SERVER['PHP_SELF']}");
    die();
}
function esFoto($tipo)
{
    $tipos = ['image/gif', 'image/jpeg', 'image/x-icon', 'image/tiff', 'img/bmp', 'image/png', 'image/webp'];
    return in_array($tipo, $tipos);
}

if (isset($_POST['update'])) {

    $estaVestido = new Vestidos();

    //Procesamos el Formulario
    $precio = $_POST['precio'];
    $nombre = trim(ucwords($_POST['nombre']));
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    if (strlen($nombre) == 0) {
        mostrarError("Rellene el campo nombre por favor");
    }

    if(is_uploaded_file($_FILES['foto']['tmp_name'])){
        //compruebo que sea realmente una foto
        if(esFoto($_FILES['foto']['type'])){
            //es un fichero de imahen lo guardamos con un descripcion aleatorio
            $miFoto="../Fotos/".$_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], $miFoto);
            $estaVestido->setfoto($miFoto);
        }
        else{
            mostrarError("Debes subir un archivo de foto!!!!");
        }
    }
    else{
        $estaVestido->setFoto("../Fotos/vestido1.png");
    }

    $nuevaVestidoId=$_POST['id'];
    $estaVestido->setId($nuevaVestidoId);
    $estaVestido->setNombre($nombre);
    $estaVestido->setPrecio($precio);
    $estaVestido->setDescripcion($descripcion);
    $estaVestido->setStock($stock);
    $estaVestido->update();

    $estaVestido = null;
    $_SESSION["mensaje"] = "Vestido updateada correctamente.";
    header("Location:vestidos.php");
} else {
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Fotos/logo2-nav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <title>Editar</title>
</head>

<body style="background-color:darksalmon">
    <h3 class="text-center my-3">Editar Vestido</h3>
    <div class="container my-4">
        <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='my-2 text-light bg-dark'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }
            ?>
        <form name="cm" method="POST" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'] ?> '>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"
                        value="<?php echo $nombre; ?>" require>
                    <input type="hidden" name="id" value="<?php echo $miVestidoId; ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio" name="precio"
                        value="<?php echo $precio; ?>" require>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Descripcion" name="descripcion"
                        value="<?php echo $descripcion; ?>" require>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Stock" name="stock"
                        value="<?php echo $stock; ?>" require>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <b>foto de Marca:</b>
                    <input type="file" class="form-control" name="foto" accept="image/*">
                </div>

            </div>
            <div class="row mt-3">
                <div class="col">
                    <button class="btn btn-primary mr-2" type="submit" name="update">Editar</button>
                    <a href="../../index.html" class="btn btn-info">Inicio</a>
                </div>
            </div>

        </form>
    </div>
</body>

</html>
<?php } ?>