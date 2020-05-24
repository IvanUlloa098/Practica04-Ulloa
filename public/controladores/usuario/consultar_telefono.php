<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../vista/usuario/formulario.css" rel="stylesheet" />
        <!--http://localhost/SistemaDeGestion/public/vista/crear_usuario.html-->
        <style type="text/css">

            body {
                font-family: pacifico-regular, Verdana, sans-serif;
            }

            table, th, td {
                border: 1px solid black;
            }

            table {
                background-color: #E8023D;
            }

            th, td {
                background-color: #E851B6;
            }

        </style>
    </head>
    <body style="margin: 5% 10% 0 5%; background-color: lightsalmon;">  

        <table style="width:100%">

            <tr>
                <th>Telefono</th>
                <th>Tipo</th>
            </tr>

            <?php
                include '../../../config/conexionBD.php';
                
                $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null; 
                
                $sql = "SELECT * FROM usuario";  
                $result = $conn->query($sql);

                $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_cedula = '$cedula'";
                $result2 = $conn->query($sql2);
                $row = $result2->fetch_assoc();
                $id = (int) $row['usu_codigo'];

                $sql3 = "SELECT * FROM telefono WHERE usu_codigo = $id";
                $result3 = $conn->query($sql3);

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
                $conn->close();
            ?>
            
        </table>
    </body>
</html>