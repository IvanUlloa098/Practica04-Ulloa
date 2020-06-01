<?php 
    session_start();
    include '../../../config/conexionBD.php';   

    if (isset($_GET['cod'])) {
        $codigo = $_GET['cod'];
    }
    

    $sql = "UPDATE usuario SET usu_eliminado = 'S' WHERE usu_codigo = '$codigo'";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Eliminado Correctamente.</em></p>"; 
    } else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>La persona con la cedula $codigo ya esta registrada en el sistema </p>"; 
        }else{ 
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        } 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 