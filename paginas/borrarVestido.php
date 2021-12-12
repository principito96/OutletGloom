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
use Clases\Vestidos;

$id=$_POST['id'];


$esteVestido=new Vestidos();

$esteVestido->setId($id);

$imagen=$esteVestido->devolverImagen();

$esteVestido->delete();

//if(basename($imagen)!="default.jpg"){
  //  unlink($imagen);
//}


$esteVestido=null;

$_SESSION['mensaje']="Vestido Borrado Correctamente";
header("Location:vestidos.php");