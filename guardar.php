<?php
require_once "conexion.php";
$dato = filter_input(INPUT_POST,'dato');
echo json_encode (["El dato recibido es: ".$dato]);
$sqlt = "INSERT INTO cambia (dato) VALUES (:dato);";
$stmt = Conexion::conectar()->prepare($sqlt);
$stmt -> bindParam(':dato',$dato);
$stmt -> execute();
?>