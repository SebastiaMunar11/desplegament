<?php


// Create connection
$conexion = new mysqli("server1", "user0", "1234", "db0");
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}


?>