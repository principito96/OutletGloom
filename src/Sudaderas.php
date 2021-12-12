<?php

namespace Clases;

require "Conexion.php";

use PDOException;
use PDO;

class Sudaderas extends Conexion{
    private $id;
    private $foto;
    private $nombre;
    private $precio;
    private $descripcion;
    private $stock;

    public function __construct(){
        parent::__construct();
    }
    //Mostrar las sudaderas

    public function mostrar(){
        $c = "select * from sudaderas";
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al devolver los datos".$ex);
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function create(){
        $c="insert into sudaderas(foto, nombre, precio, descripcion, stock) values(:f, :n, :p, :d, :s)";
        //Sirve para ejecutar la sentencia sql
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute([
                ':f'=>$this->foto,
                ':n'=>$this->nombre, 
                ':p'=>$this->precio,
                ':s'=>$this->stock,
                ':d'=>$this->descripcion
            ]);
        }catch(PDOException $ex){
            die("Error creando una sudadera: ".$ex->getMessage());
        }

    }


    public function devolverImagen(){
        $c="select foto from sudaderas where id=:i";
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute([':i'=>$this->id]);
        }catch(PDOException $ex){
            die("Error al recuperar la foto: ".$ex->getMessage());
        }
        return $stmt->fetch(PDO::FETCH_OBJ)->foto;
    }

    public function read(){
        $c="select * from sudaderas where id=:i";
        $stmt=parent::$conexion->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar UNA sudadera: ".$ex->getMessage());
        }
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update(){
        $up="update sudaderas set nombre=:n, precio=:p, foto=:f, descripcion=:d, stock=:s where id=:i"; 
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
            die("Error al modificar los datos de una sudadera".$ex->getMessage());
        }
        
    }

    
    public function delete(){
        $de="delete from sudaderas where id=:i";
        $stmt=parent::$conexion->prepare($de);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar la sudedera!!! ".$ex->getMessage());
        }

    }

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}