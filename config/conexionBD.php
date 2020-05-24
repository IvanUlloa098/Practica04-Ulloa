<?php 
$db_servername = "localhost"; 
$db_username = "root"; 
$db_password = ""; 
$db_name = "hipermedial"; 

$conn = new mysqli($db_servername, $db_username, $db_password, $db_name); 
$conn->set_charset("utf8"); 
# Probar conexión 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}else{ 
    echo "<p>CONEXION REALIZADA</p>"; 
} ?>