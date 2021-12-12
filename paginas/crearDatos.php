<?php

require '../vendor/autoload.php';
require '../src/Usuarios.php';

use Clases\Usuarios;


$usuario=new Usuarios();
$usuario->setNombre("Admin");
$usuario->setEmail(("correoprueba@hotmail.com"));
$pass=hash('sha256', "secret0");
$usuario->setPassword($pass);
$usuario->create();
$usuario=null;

echo "<h2>Usuario administrador creado</h2>";