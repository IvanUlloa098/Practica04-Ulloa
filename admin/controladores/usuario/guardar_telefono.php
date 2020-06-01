<?php 
    session_start();
    
    include '../../../config/conexionBD.php';   

    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : null; 
    $tipo = isset($_POST["tipo"]) ? trim($_POST["tipo"]) : null;
    $usuario = $_SESSION['username'];
    $contrasena = $_SESSION['password'];

    $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_correo = '$usuario' AND usu_password = MD5('$contrasena')";
    $result2 = $conn->query($sql2);
    $row = $result2->fetch_assoc();

    $codigo = $row['usu_codigo'];

    $sql = "INSERT INTO telefono (usu_codigo, tel_numero, tel_tipo) VALUES ('$codigo', '$telefono', '$tipo ')";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Telefono '$telefono' guardado correctamente.</em></p>"; 
    } else {
        echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 