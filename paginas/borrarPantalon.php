<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: login.php");
    die();
}

if(!isset($_POST['id'])){
    header("Location:../../index.html");
    die();
}

require "../vendor/autoload.php";
use Clases\Pantalones;

$id=$_POST['id'];


$estePantalon=new Pantalones();

$estePantalon->setId($id);

//$imagen=$estePantalon->devolverImagen();

$estePantalon->delete();

//if(basename($imagen)!="default.jpg"){
//    unlink($imagen);
//}


$estePantalon=null;

$_SESSION['mensaje']="Pantalon Borrado Correctamente";
header("Location:pantalones.php");