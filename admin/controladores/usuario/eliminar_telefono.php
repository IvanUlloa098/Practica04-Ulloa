<?php

    include '../../../config/conexionBD.php';
    $codigo = $_GET["codigo"];

    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());
    $sql = "UPDATE telefono SET tel_eliminado = 'S', tel_fecha_modificacion = '$fecha' WHERE tel_codigo = $codigo";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../vista/usuario/pagina_usuario.php");
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }
    
    $conn->close();

?>