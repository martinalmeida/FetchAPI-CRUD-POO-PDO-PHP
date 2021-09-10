<?php
include_once "../../config/database.php";
include_once "../objects/crud.php";

$database = new Database();
$db = $database->getConnection();
$update = new crud($db);

$update->id = htmlspecialchars($_POST["id_up"]);
$update->nombre = htmlspecialchars($_POST["nombre_up"]);
$update->correo = htmlspecialchars($_POST["correo_up"]);
$update->passwork = htmlspecialchars($_POST["passwork_up"]);
$update->rol_fk = htmlspecialchars($_POST["rol_fk_up"]);

if ($update->makeUpdate() == true) {
    echo json_encode(array('success' => 1));
} elseif ($update->makeUpdate() == false) {
    echo json_encode(array('success' => 0));
}
