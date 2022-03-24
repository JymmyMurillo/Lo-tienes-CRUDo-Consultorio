<?php

include '../model/conexion.php';

$db = new Database();

$id = $_GET['id'];

$sentencia = $db->mysql->prepare("DELETE FROM citas where id = ?;");
$resultado = $sentencia->execute([$id]);

if ($resultado === TRUE) {
  header('Location: ../index.php?mensaje=eliminado');
} else {
  header('Location: ../index.php?mensaje=error');
}

?>
