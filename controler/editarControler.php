<?php
if (!isset($_GET['id'])) {
  header('Location: index.php?mensaje=error');
  exit();
}


require './model/conexion.php';

$db = new Database();

$id = $_GET['id'];

$sentencia = $db->mysql->prepare("select * FROM citas where id = ?;");
$sentencia->execute([$id]);
$citas = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($citas);

require './view/editarView.php';