<?php
class crud
{

    // https://lenguajesdeprogramacion.net/diccionario/diferencia-entre-public-protected-o-private/
    // Conexión a la base de datos y nombre de la tabla
    private $conn;
    private $table_name = "usuarios";
    private $table_rol = "roles";

    //Propiedades de los objetos
    public $id;
    public $nombre;
    public $correo;
    public $passwork;
    public $rol_fk;
    public $data;

    // Explicación sobre la función https://www.w3schools.com/php/php_oop_constructor.asp
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function select()
    {
        $query = "SELECT * FROM " . $this->table_rol . " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        $row = $stmt->fetchAll(PDO::FETCH_BOTH);
        return $row;
    }

    function selectupdate()
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id =  " . $this->data . " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
        return $row;
    }

    function table()
    {
        $query = "SELECT * FROM " . $this->table_name . " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array());
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);
        return $row;
    }

    function create()
    {

        $query = "INSERT INTO " . $this->table_name . " SET nombre=?, correo=?, passwork=?, rol_fk=? ";
        $stmt = $this->conn->prepare($query);
        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->correo = htmlspecialchars(strip_tags($this->correo));
        $this->passwork = htmlspecialchars(strip_tags($this->passwork));
        $this->rol_fk = htmlspecialchars(strip_tags($this->rol_fk));

        $stmt->bindParam(1, $this->nombre);
        $stmt->bindParam(2, $this->correo);
        $stmt->bindParam(3, $this->passwork);
        $stmt->bindParam(4, $this->rol_fk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    function makeUpdate()
    {
        $query = "UPDATE " . $this->table_name . " SET nombre=?, correo=?, passwork=?, rol_fk=?  WHERE id = " . $this->id . " ";
        $stmt = $this->conn->prepare($query);
        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->correo = htmlspecialchars(strip_tags($this->correo));
        $this->passwork = htmlspecialchars(strip_tags($this->passwork));
        $this->rol_fk = htmlspecialchars(strip_tags($this->rol_fk));

        $stmt->bindParam(1, $this->nombre);
        $stmt->bindParam(2, $this->correo);
        $stmt->bindParam(3, $this->passwork);
        $stmt->bindParam(4, $this->rol_fk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id =  " . $this->data . " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
