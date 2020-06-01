function crearUsuario() {

    var vcedula = document.getElementById("cedula").value;
    var vnombres = document.getElementById("nombres").value;
    var vapellidos = document.getElementById("apellidos").value;
    var vdireccion = document.getElementById("direccion").value;
    var vtelefono = document.getElementById("telefono").value;
    var vcorreo = document.getElementById("correo").value;
    var vfechaNacimiento = document.getElementById("fechaNacimiento").value;
    var vcontrasena = document.getElementById("contrasena").value;

    if (vcedula == "" || vnombres == "" || vapellidos === "" || vdireccion == "" || vtelefono == "" || vcorreo == "" || vfechaNacimiento == "" || vcontrasena == "") {
        //alert("here");
        document.getElementById("respuesta").innerHTML = "<br><p><em>Rellene los campos necesarios...</em></p>";
    } else {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "../../controladores/usuario/crear_usuario.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("cedula=" + vcedula + "&nombres=" + vnombres + "&apellidos=" + vapellidos + "&direccion=" + vdireccion + "&telefono=" + vtelefono + "&correo=" + vcorreo + "&fechaNacimiento=" + vfechaNacimiento + "&contrasena=" + vcontrasena);
    }
    return false;

}

function validarTelefono(elemento) {
    
    if(elemento.value.length > 0 && elemento.value.length <= 10){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        console.log(miAscii);
        //alert(elemento.value.length);
        if(miAscii >= 48 && miAscii <= 57){
            return true;
        } else {
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            return false;
        }

    }  else if (elemento.value.length > 10) {         
        elemento.value = elemento.value.substring(0, elemento.value.length-1);
        return false;
    } else{
        return true;
    }

}

function validarLetras(elemento) {

        if(elemento.value.length > 0){
            var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
            console.log(miAscii);

            if((miAscii >= 97 && miAscii <= 122) || (miAscii >= 65 && miAscii <= 90) || (miAscii == 32)){
                return true;
            } else {
                elemento.value = elemento.value.substring(0, elemento.value.length-1);
                return false;
            }

        } else{
            return true;
        }

}