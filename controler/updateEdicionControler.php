<?php

include '../model/conexion.php';

$db = new Database();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tema = $_POST['tema'];
$fecha = $_POST['fecha'];


$sentencia = $db->mysql->prepare("UPDATE citas SET nombre = ?, tema = ?, fecha = ? where id = ?;");
$resultado = $sentencia->execute([$nombre, $tema, $fecha, $id]);



if ($resultado === TRUE) {
  header('Location: ../index.php?mensaje=editado');
} else {
  header('Location: ../index.php?mensaje=error');
  exit();
}
