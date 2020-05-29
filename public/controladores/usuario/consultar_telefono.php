<?php
    include '../../../config/conexionBD.php';
                
    $cedula = $_GET['cedula']; 
    
    $sql = "SELECT * FROM usuario";  
    $result = $conn->query($sql);

    $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_cedula = '$cedula'";
    $result2 = $conn->query($sql2);
    $row = $result2->fetch_assoc();
    $id = (int) $row['usu_codigo'];

    $sql3 = "SELECT * FROM telefono WHERE usu_codigo = $id";
    $result3 = $conn->query($sql3);

    echo " <table style='width:100%'>
    <tr>
    <th>Telefono</th>
    <th>Tipo</th>
    </tr>";

    if ($result3->num_rows > 0) {

        while($row = $result3->fetch_assoc()) {

            echo "<tr>";
            echo " <td>" . $row['tel_numero'] . "</td>";
            echo " <td>" . $row['tel_tipo'] . "</td>";
            echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
            echo " <td> <a href='modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
            echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar contraseña</a> </td>";
            echo "</tr>";

        }
            
    } else {
        echo "<tr>";
        echo " <td colspan='7'> Sin telefonos registrados</td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn->close();

?>
