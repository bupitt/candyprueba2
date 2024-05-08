<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "candyland";

$conexion = new msqli($server, $user, $pass, $db);

if ($conexion->connect_errno){
    die("conexion a fallado". $conexion->connect_errno);
}
  else
  {
    echo "conectado a la bd candyland";
  }



?>