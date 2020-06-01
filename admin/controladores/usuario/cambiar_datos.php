<?php 
    session_start();
    include '../../../config/conexionBD.php';   


    // $usuario = $_SESSION['username'];
    // $contrasena = $_SESSION['password'];
    // $codigo = $_POST["codigo"];
    $codigo = isset($_POST["codigo"]) ? trim($_POST["codigo"]) : null;
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null; 
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null; 
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null; 
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null; 
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null; 
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null; 
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null; 
    $rol = isset($_POST["rol"]) ? trim($_POST["rol"]) : null;

    // $sql = "UPDATE usuario SET usu_cedula = '$cedula', usu_nombres = '$nombres', usu_apellidos='$apellidos', usu_direccion='$direccion', usu_telefono='$telefono',
    // usu_correo='$correo', usu_fecha_nacimiento='$fechaNacimiento' WHERE usu_correo='$usuario' AND usu_password = MD5('$contrasena')";

    $sql = "UPDATE usuario SET usu_cedula = '$cedula', usu_nombres = '$nombres', usu_apellidos='$apellidos', usu_direccion='$direccion', usu_telefono='$telefono',
    usu_correo='$correo', usu_fecha_nacimiento='$fechaNacimiento', usu_rol='$rol' WHERE usu_codigo='$codigo'";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Usuario Modificado Correctamente.</em></p>"; 
    } else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>"; 
        }else{ 
            //echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        } 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 