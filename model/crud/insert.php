<?php
include_once "../../config/database.php";
include_once "../objects/crud.php";

$database = new Database();
$db = $database->getConnection();
$insert = new crud($db);

$insert->nombre = htmlspecialchars($_POST["nombre"]);
$insert->correo = htmlspecialchars($_POST["correo"]);
$insert->passwork = htmlspecialchars($_POST["passwork"]);
$insert->rol_fk = htmlspecialchars($_POST["rol_fk"]);

if ($insert->create() == true) {
    echo json_encode(array('success' => 1));
} elseif ($insert->create() == false) {
    echo json_encode(array('success' => 0));
}
