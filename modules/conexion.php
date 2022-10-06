<?php
date_default_timezone_set('America/Mexico_City');

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="db";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="test";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="db_school";

if (strlen( $db_name ) === 0)
  $conexion = new mysqli($db_host, $db_user, $db_pass);
else 
  $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conexion->connect_error) 
	die("Connection failed: " . $conn->connect_error);

mysqli_set_charset($conexion, 'utf8');
