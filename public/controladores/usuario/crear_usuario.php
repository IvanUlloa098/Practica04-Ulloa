<!DOCTYPE html> <html> <head> <meta charset="UTF-8"> <title>Crear Nuevo Usuario</title> <style type="text/css" rel="stylesheet"> .error{ color: red; } </style> </head> <body>

<?php //incluir conexión a la base de datos 
    include '../../../config/conexionBD.php';   

    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null; 
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null; 
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null; 
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null; 
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null; 
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null; 
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null; 
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    $sql = "INSERT INTO usuario (usu_cedula, usu_nombres, usu_apellidos, usu_direccion, usu_telefono, usu_correo, usu_password, usu_fecha_nacimiento, usu_fecha_modificacion) 
            VALUES ('$cedula', '$nombres', '$apellidos', '$direccion', '$telefono', '$correo', MD5('$contrasena'), '$fechaNacimiento', null)";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Usuario creado correctamente.</em></p>"; 
    } else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>"; 
        }else{ 
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        } 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 
</body> </html>
