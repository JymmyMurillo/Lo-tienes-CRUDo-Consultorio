<?php


require '../model/conexion.php';

echo "erooooor";
$db = new Database();
$correcto = false;


  

  $nombre = $_POST['nombre'];
  $tema = $_POST['tema'];
  $fecha = $_POST['fecha'];

  //echo $nombre, $tema;

  $sql = 'INSERT INTO citas(nombre, tema, fecha) VALUES(:nombre, :tema, :fecha)';
  $respuesta = $db->mysql->prepare($sql);

  $respuesta->execute([
    ':nombre' => $nombre,
    ':tema' => $tema,
    ':fecha' => $fecha,
  ]);

  if ($respuesta) {
    $correcto = true;
  }



  if ($correcto === TRUE) {
    header('Location: ../index.php?mensaje=registrado');
  } else {
    header('Location: ../index.php?mensaje=error');
    exit();
  }
