<?php

require './model/conexion.php';

$db = new Database();

$sentencia = $db->mysql->query("select * FROM citas");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//echo'<pre>';
//print_r($resultado);



require './view/citasView.php';
?>