<?php 
    session_start();

    include '../../../config/conexionBD.php';

    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null; 
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contrasena') and usu_rol='U' and usu_eliminado='N'";
    $sql2 = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contrasena') and usu_rol='A' and usu_eliminado='N'";

    $result = $conn->query($sql); 
    $result2 = $conn->query($sql2); 

    if ($result->num_rows > 0) { 
        
        $_SESSION['isLogged'] = TRUE; 
        $_SESSION['username'] = $_POST['correo']; 
        $_SESSION['password'] = $_POST['contrasena']; 
       

        $URL="../../vista/usuario/index.html";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        //header("Location: ../../vista/usuario/index.html"); 

    } else if ($result2->num_rows > 0) {
     
        $_SESSION['isLogged'] = TRUE; 
        $_SESSION['username'] = $_POST['correo']; 
        $_SESSION['password'] = $_POST['contrasena']; 
        $_SESSION['admin'] = TRUE;

        $URL="../../../admin/vista/usuario/index.html";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';  
        //header("Location: ../../../admin/vista/usuario/index.html");  

    } else { 
        echo "<p class='error'>Usuario no registrado </p>"; 
    }
    $conn->close(); 
?>
