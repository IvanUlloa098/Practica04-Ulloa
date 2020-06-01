<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE || $_SESSION['admin'] === FALSE){
        header("Location: ../../../public/vista/usuario/login.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Modificar datos de persona</title>

 <script src="../../../admin/controladores/usuario/cambiar_datos.js"></script>
</head>
<body>
    <?php

        include "../../../config/conexionBD.php";

        $usuario = $_SESSION['username'];
        $contrasena = $_SESSION['password'];

        $sql = "SELECT * FROM usuario where usu_correo='$usuario' AND usu_password=MD5('$contrasena')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
    ?>

    <form id="formulario01" method="POST" >
        <fieldset >
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <label for="cedula">Cedula (*)</label>
        <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
        required placeholder="Ingrese la cedula ..."/>
        <br>
        <label for="nombres">Nombres (*)</label>
        <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"];
        ?>" required placeholder="Ingrese los dos nombres ..."/>
        <br>
        <label for="apellidos">Apelidos (*)</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"];
        ?>" required placeholder="Ingrese los dos apellidos ..."/>
        <br>
        <label for="direccion">Dirección (*)</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
        ?>" required placeholder="Ingrese la dirección ..."/>
        <br>
        <label for="telefono">Teléfono (*)</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
        ?>" required placeholder="Ingrese el teléfono ..."/>
        <br>
        <label for="fecha">Fecha Nacimiento (*)</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row["usu_fecha_nacimiento"]; ?>" required placeholder="Ingrese la fecha de nacimiento ..."/>
        <br>
        <label for="correo">Correo electrónico (*)</label>
        <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"
        required placeholder="Ingrese el correo electrónico ..."/>
        <br>

           
        </fieldset>
        
        <div>
        <input type="button" id="modificar" name="modificar" value="Modificar" onclick="modificarUsuario()"/>
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />   
        </div>

        

    </form>
    <div id="respuesta">

    </div>
    <?php
        }
            } else {
            echo "<p>Ha ocurrido un error inesperado !</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";
        }
        $conn->close();
    ?> 
</body>
</html>