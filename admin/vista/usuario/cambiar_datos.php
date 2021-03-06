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
    <link href="formulario.css" rel="stylesheet" />
    <script src="../../../admin/controladores/usuario/cambiar_datos.js" type="text/javascript"></script>
    <style type="text/css">

        form {
            font-size: 1.5em;
        }
        ::placeholder {
            font-size: large;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body style="margin: 5% 0 0 25%; background-color: lightsalmon;">
    <?php

        include "../../../config/conexionBD.php";
        
        if (isset($_GET['codigo']))
        {
            $codigo = $_GET['codigo'];
            $sql = "SELECT * FROM usuario where usu_codigo='$codigo'";
        } else {
            $usuario = $_SESSION['username'];
            $contrasena = $_SESSION['password'];

            $sql = "SELECT * FROM usuario where usu_correo='$usuario' AND usu_password=MD5('$contrasena')";
        }
        
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
    ?>

    <form id="formulario01" onsubmit="return modificarUsuario()" >
        <fieldset >

            <input type="hidden" id="codigo" name="codigo" value="<?php echo $row["usu_codigo"]; ?>" />
            <label for="cedula">Cedula (*)</label>
            <input type="text" maxlength="10" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
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
            <input type="text" maxlength="10" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
            ?>" required placeholder="Ingrese el teléfono ..."/>
            <br>
            <label for="fecha">Fecha Nacimiento (*)</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row["usu_fecha_nacimiento"]; ?>" />
            <br>
            <label for="correo">Correo electrónico (*)</label>
            <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"
            required placeholder="Ingrese el correo electrónico ..."/>
            <br>
            <label for="rol">Rol del Usuario (*)</label>
            <input type="text" id="rol" name="rol" value="<?php echo $row["usu_rol"]; ?>"
            required placeholder="Ingrese el correo electrónico ..."/>
            <br>
            
        </fieldset>
        
        <div>
        <input type="button" id="modificar" name="modificar" value="Modificar" onclick="modificarUsuario()"/>
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />   
        </div>

        

    </form>
    
    <?php
        }
            } else {
            echo "<p>Ha ocurrido un error inesperado !</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";
        }
        $conn->close();
    ?> 

    <div id="respuesta"></div>

</body>
</html>