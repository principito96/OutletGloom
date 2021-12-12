<?php

namespace Clases;

require "../src/Conexion.php";

use PDO;
use PDOException;

class Usuarios extends Conexion
{
    private $id;
    private $nombre;
    private $password;
    private $email;

    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $con = "insert into usuarios(nombre, password, email) values(:n, :p, :e)";
        $stmt = parent::$conexion->prepare($con);
        try {
            $stmt->execute([
                ':n' => $this->nombre,
                ':e' => $this->email,
                ':p' => $this->password,
            ]);
        } catch (PDOException $ex) {
            die("Error al insertar usuario" . $ex->getMessage());
        }
    }

    public function validarUsuario(string $nombre, string $password): bool{
        $con = "select * from usuarios where nombre=:n AND password=:p";
        $stmt = parent::$conexion->prepare($con);

        try {
            $stmt->execute([
                ':n' => $nombre,
                ':p' => $password
            ]);
        } catch (PDOException $ex) {
            die("Error al validar usuario: " . $ex->getMessage());
        }
        $fila = $stmt->fetch(PDO::FETCH_OBJ);
        //Si fila != null devuelvo true, false si no
        return ($fila != null) ? true : false;
    }

    public function borrarTodo(){
        $con = "delete from usuarios";
        $stmt = parent::$conexion->prepare($con);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al borra todo" . $ex->getMessage());
        }
    }

    //----------------------------------------
    //GETTER & SETTER
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

    public function getPassword()
    {   
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
}