<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE || $_SESSION['admin'] === FALSE){
        header("Location: public/vista/usuario/index.html");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="formulario.css" rel="stylesheet" />
        <script src="../../../admin/controladores/usuario/cambiar_contrasena.js" type="text/javascript"></script>
        <!--http://localhost/Practica04-Ulloa/private/vista/usuario/cambiar_contrasena.html-->
        
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

        <h1>Cambiar Contraseña</h1>

        <form id="formulario01" onsubmit="return nuevaContrasena()" >
            <fieldset>
                <label for="actual">Contraseña actual :</label>
                <input type="password" id="actual" name="actual" value="" placeholder="Ingrese su contraseña...">
                <br>
                
                <label for="nueva">Contraseña nueva:</label>
                <input type="password" id="nueva" name="nueva" value="" placeholder="Ingrese nueva contraseña..."/>
                <br>
                
            </fieldset>

            <div>
                <input type="button" id="buscar" name="buscar" value="Aceptar" onclick="nuevaContrasena()">
                <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
                <br>
            </div>

            <div id="respuesta"></div>

        </form>
        
    </body>
</html>