<?php 
    session_start();

    include '../../../config/conexionBD.php';

    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null; 
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contrasena') and usu_rol='U'";
    $sql2 = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contrasena') and usu_rol='A'";

    $result = $conn->query($sql); 
    $result2 = $conn->query($sql2); 

    if ($result->num_rows > 0) { 
        
        $_SESSION['isLogged'] = TRUE; 
        $_SESSION['username'] = $_POST['correo']; 
        $_SESSION['password'] = $_POST['contrasena']; 

        header("Location: ../../vista/usuario/index.html"); 

    } else if ($result2->num_rows > 0) {
        
        $_SESSION['isLogged'] = TRUE; 
        $_SESSION['username'] = $_POST['correo']; 
        $_SESSION['password'] = $_POST['contrasena']; 

        header("Location: ../../../admin/vista/usuario/index.html");  

    } else { 
        header("Location: ../../vista/usuario/login.html"); 
    }
    $conn->close(); 
?>
