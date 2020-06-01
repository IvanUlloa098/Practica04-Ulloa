<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE || $_SESSION['admin'] === FALSE){
       header("Location: ../../../public/vista/usuario/login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">

            @font-face { 
                font-family: pacifico-regular; 
                src: url('../../../config/80s.TTF'); 
            } 

            body {
                font-family: pacifico-regular, Verdana, sans-serif;
            }

            form {
                font-size: 1.5em;
            }

            .error {
                color: red;
                font-size: 12px;
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

            #show_users {
                margin: 2% 0 0 0;
                font-family: Arial, sans-serif;
                float: left;
            }

        </style>


</head>

<body style="margin: 5% 0 0 5%; background-color: lightsalmon;">
    <h1>Mostrar Todos Usuarios</h1>

    <div id="show_users" style="width: 100%;">
        <?php
            include '../../../config/conexionBD.php';

            $sql = "SELECT * FROM usuario";
            $resul = $conn->query($sql);
            if($resul->num_rows >0 ){
                echo "<table style='width:100%'>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Cambiar Datos</th>
                        <th>Mod</th>
                    </tr>";
                    

                while ($row = $resul->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" .$row['usu_cedula']. "</td>";
                    echo "<td>" .$row['usu_nombres']. "</td>";
                    echo "<td>" .$row['usu_apellidos']. "</td>";
                    echo "<td>" .$row['usu_direccion']. "</td>";
                    echo "<td>" .$row['usu_telefono']. "</td>";
                    echo "<td>" .$row['usu_correo']. "</td>";
                    // echo "<td>" .$row['usu_rol']. "</td>";
                    // echo "<select id=tipo_user name=tipo_user>
                    //     <option value=User_normal>Usuario Normal</option>
                    //     <option value=User_admin>Usuario Administrador</option>
                    //     </select>";
                    echo "</tr>";
                }
                

            }else {
                echo "<tr>";
                echo " <td colspan='7'> <em><strong>No hay Ningun Usuario</strong></em></td>";
                echo "</tr>";
            }
            echo "</table>";
            $conn->close();
            


        ?>

    </div>
</body>
</html>