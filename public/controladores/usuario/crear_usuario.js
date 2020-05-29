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
        alert("here");
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

        xmlhttp.send("cedula="+ vcedula+ "&nombres="+ vnombres+ "&apellidos="+ vapellidos+ "&direccion="+ vdireccion+ "&telefono="+ vtelefono+ "&correo="+ vcorreo+ "&fechaNacimiento="+ vfechaNacimiento+ "&contrasena="+ vcontrasena);
    }
    return false;

}