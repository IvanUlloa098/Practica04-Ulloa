<?php
 session_start();
 if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
    header("Location: ../../../public/vista/usuario/login.html");
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="formulario.css" rel="stylesheet" />
        <!--http://localhost/Practica04-Ulloa/private/vista/usuario/pagina_usuario.html-->
        
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

            #menu {
                font-family: pacifico-regular, Arial, sans-serif;
                float: left;
                margin: 2% 5% 0 0;
                border: thick dotted #FF3521;
                font-family: Arial, Helvetica, sans-serif;
                background-color: #EB809C;
                height: 6em;
                width: 20em;
            }

            #telefonos {
                margin: 2% 0 0 0;
                font-family: Arial, sans-serif;
                float: left;
            }

        </style>
    </head>

    <body style="margin: 5% 0 0 5%; background-color: lightsalmon;">

        <h1>Página Personal</h1>

        <div id="menu">
            <a href="#">Añadir Teléfono</a><br><br>
            <a href="#">Cambiar Datos Personales</a><br><br>
            <a href="#">Cambiar Contrasena</a>
        </div>

        <div id="telefonos" style="width: 65%;">
            <?php
                include '../../../config/conexionBD.php';
                
                $usuario = $_SESSION['username'];
                $contrasena = $_SESSION['password'];

                $sql = "SELECT * FROM usuario";  
                $result = $conn->query($sql);

                $sql2 = "SELECT usu_codigo FROM usuario WHERE usu_correo = '$usuario' AND usu_password = MD5('$contrasena')";
                $result2 = $conn->query($sql2);
                $row = $result2->fetch_assoc();

                echo " <table style='width:100%'>";
                echo "<tr>
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
                            echo " <td>" . $row['tel_numero'] . "</td>";
                            echo " <td>" . $row['tel_tipo'] . "</td>";
                            echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
                            echo " <td> <a href='modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
                            echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar contraseña</a> </td>";
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
        </div>
        
    </body>
</html>