<?php
date_default_timezone_set('America/Mexico_City');

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="db_school";


if (strlen( $db_name ) === 0)
  $conexion = new mysqli("$db_host:$db_port", $db_user, $db_pass);
else
  $conexion = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);
  $sql = "CREATE DATABASE db_school";

// Check connection
if ($conexion->connect_error)
        die("Connection failed: " . $conexion->connect_error);

if ($conexion->query($sql) === TRUE) {
  echo "Base de Datos Creada.";
} else {
  echo "Error al Crear la Base de Datos:". $conn->error;
}

mysqli_set_charset($conexion, 'utf8');

