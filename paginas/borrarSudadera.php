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
use Clases\Sudaderas;

$id=$_POST['id'];


$estaSudadera=new Sudaderas();

$estaSudadera->setId($id);

$imagen=$estaSudadera->devolverImagen();

$estaSudadera->delete();

//if(basename($imagen)!="default.jpg"){
//    unlink($imagen);
//}


$estaSudadera=null;

$_SESSION['mensaje']="Sudadera Borrada Correctamente";
header("Location:sudaderas.php");