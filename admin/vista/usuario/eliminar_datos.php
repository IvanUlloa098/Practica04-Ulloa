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
    <script src="../../controladores/usuario/eliminar_datos.js" type="text/javascript"></script>
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
        } 
        
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
    ?>

    <form id="formulario01" onsubmit="return modificarUsuario()" >
        <fieldset >

            <input type="hidden" id="codigo" name="codigo" value="<?php echo $row["usu_codigo"]; ?>" />
            <label for="cedula">Cedula (*)</label>
            <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
            required placeholder="Ingrese la cedula ..." disabled/>
            <br>
            <label for="nombres">Nombres (*)</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"];
            ?>" required placeholder="Ingrese los dos nombres ..." disabled/>
            <br>
            <label for="apellidos">Apelidos (*)</label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"];
            ?>" required placeholder="Ingrese los dos apellidos ..." disabled/>
            <br>
            <label for="direccion">Dirección (*)</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
            ?>" required placeholder="Ingrese la dirección ..." disabled/>
            <br>
            <label for="telefono">Teléfono (*)</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
            ?>" required placeholder="Ingrese el teléfono ..." disabled/>
            <br>
            <label for="fecha">Fecha Nacimiento (*)</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row["usu_fecha_nacimiento"]; ?>" disabled/>
            <br>
            <label for="correo">Correo electrónico (*)</label>
            <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"
            required placeholder="Ingrese el correo electrónico ..." disabled/>
            <br>
            <label for="rol">Rol del Usuario (*)</label>
            <input type="text" id="rol" name="rol" value="<?php echo $row["usu_rol"]; ?>"
            required placeholder="Ingrese el correo electrónico ..." disabled/>
            <br>
            
        </fieldset>
        
        <div>
        <input type="button" id="modificar" name="modificar" value="Eliminar" onclick="modificarUsuario()"/>
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