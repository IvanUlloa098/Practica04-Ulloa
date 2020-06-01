<?php 
    session_start();
    
    include '../../../config/conexionBD.php';   

    $actual = isset($_POST["actual"]) ? trim($_POST["actual"]) : null; 
    $nueva = isset($_POST["nueva"]) ? trim($_POST["nueva"]) : null;
    $usuario = $_SESSION['username'];
    $contrasena = $_SESSION['password'];

    $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_correo = '$usuario' AND usu_password = MD5('$contrasena')";
    $result2 = $conn->query($sql2);
    $row = $result2->fetch_assoc();

    $codigo = $row['usu_codigo'];

    $sql = "UPDATE usuario SET usu_password = MD5('$nueva') WHERE usu_codigo = $codigo";

    if (md5($actual) == md5($contrasena)){

        if ($conn->query($sql) === TRUE) { 
            $_SESSION['isLogged'] = FALSE;
            echo "<p><em>Contraseña cambiada correctamente.</em></p>"; 
            session_destroy();
        } else {
            $_SESSION['password'] = $actual; 
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        }

    } else {
        echo "<p class='error'><em> Contraseña incorrecta.</em></p>"; 
    }
    

    //cerrar la base de datos 
    $conn->close(); 
?> 