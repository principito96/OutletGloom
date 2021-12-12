<?php

namespace Clases;

require "Conexion.php";

use PDOException;
use PDO;

class Vestidos extends Conexion{
    private $id;
    private $foto;
    private $nombre;
    private $precio;
    private $descripcion;
    private $stock;

    public function __construct(){
        parent::__construct();
    }

    //Mostrar las vestidos

    public function mostrar(){
        $c = "select * from vestidos order by id";
        //Sirve para ejecutar la sentencia SQL
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al devolver los datos".$ex);
        }
        $vestidos=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $vestidos;
    }

    public function create(){
        $crear="insert into vestidos(foto, nombre, precio, descripcion, stock) values(:f, :n, :p, :d, :s)";
        //Sirve para ejecutar la sentencia sql
        $stmt=parent::$conexion->prepare($crear);
        try{
            $stmt->execute([
                ':f'=>$this->foto,
                ':n'=>$this->nombre, 
                ':p'=>$this->precio,
                ':d'=>$this->descripcion,
                ':s'=>$this->stock
            ]);
        }catch(PDOException $ex){
            //mensaje de error
            die("Error creando un vestido: ".$ex->getMessage());
        }
    }

    public function read(){
        $c="select * from vestidos where id=:i";
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar un vestido: ".$ex->getMessage());
        }
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update(){
        $up="update vestidos set nombre=:n, precio=:p, foto=:f, descripcion=:d, stock=:s where id=:i"; 
        $stmt=parent::$conexion->prepare($up);
        try {
            $stmt->execute([
                ':n' => $this->nombre,
                ':p' => $this->precio,
                ':f' => $this->foto,
                ':d' => $this->descripcion,
                ':s' => $this->stock,
                ':i' => $this->id
            ]);
        } catch (PDOException $ex) {
            die("Error al modificar los datos".$ex->getMessage());
        }
        
    }

    public function recuperarTodas(){
        $c= "select * from vestidos";
        $stmt=parent::$conexion->prepare($c);   
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar un vestido: ".$ex->getMessage());
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function devolverImagen(){
        $c="select foto from vestidos where id=:i";
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute([':i'=>$this->id]);
        }catch(PDOException $ex){
            die("Error al recuperar la foto: ".$ex->getMessage());
        }
        return $stmt->fetch(PDO::FETCH_OBJ)->foto;
    }

    public function delete(){
        $de="delete from vestidos where id=:i";
        $stmt=parent::$conexion->prepare($de);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar el vestido!!! ".$ex->getMessage());
        }

    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}