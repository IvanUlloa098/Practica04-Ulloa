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
        <link href="../../../config/formulario.css" rel="stylesheet" />
        <script src="../../controladores/usuario/crear_telefono.js" type="text/javascript"></script>
        <!--http://localhost/Practica04-Ulloa/public/vista/usuario/login.html-->
        
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

        <h1>Nuevo Telefono</h1>

        <form id="formulario01" onsubmit="return crearTelefono()">
            <fieldset>
                <label for="nombre">Nombre del contacto :</label>
                <input type="text" id="nombre" name="nombre" value="" onkeyup="return validarLetras(this)" placeholder="Ingrese el nombre...">
                <br>

                <label for="telefono">Telefono :</label>
                <input type="text" id="telefono" name="telefono" value="" onkeyup="return validarTelefono(this)" maxlength = "10" placeholder="Ingrese el numero de telefono...">
                <br>
                
                <label for="tipo">Operadora :</label>
                <select id="tipo" name="tipo">
                    <option value="MOVISTAR">MOVISTAR</option>
                    <option value="CLARO">CLARO</option>
                    <option value="CNT">CNT</option>
                    <option value="CONVENCIONAL">CONVENCIONAL</option>
                </select>
                <br>
                
            </fieldset>

            <div>
                <input type="button" id="aceptar" name="aceptar" value="Aceptar" onclick="crearTelefono()">
                <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
                <br>
            </div>

        </form>

        <div id="respuesta"></div>
        
    </body>
</html>