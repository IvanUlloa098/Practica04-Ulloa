<?php
    include '../../../config/conexionBD.php';
                
    $cedula = $_GET['cedula']; 
    
    $sql = "SELECT * FROM usuario";  
    $result = $conn->query($sql);

    $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_cedula = '$cedula'";
    $result2 = $conn->query($sql2);
    $row = $result2->fetch_assoc();

    echo " <table style='width:100%'>";
    echo "<tr>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Tipo</th>
    </tr>";

    if($result2->num_rows > 0){

        $id = (int) $row['usu_codigo'];
        $sql3 = "SELECT * FROM telefono WHERE usu_codigo = $id";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0) {

            while($row = $result3->fetch_assoc()) {
    
                echo "<tr>";
                echo " <td>" . $row['tel_nombre'] . "</td>";
                echo " <td>" . $row['tel_numero'] . "</td>";
                echo " <td>" . $row['tel_tipo'] . "</td>";
                echo "</tr>";
    
            }
                
        } else {
            echo "<tr>";
            echo " <td colspan='7'> <em><strong>Ningun telefono registrado</strong></em></td>";
            echo "</tr>";
        }

    } else {
        echo "<tr>";
        echo " <td colspan='7'> <em><strong>Usuario no registrado</strong></em></td>";
        echo "</tr>";
    }

    echo "</table>";
    $conn->close();

?>
