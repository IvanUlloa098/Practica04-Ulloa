function loginUsuario() {

    var vcorreo = document.getElementById("correo").value;
    var vcontrasena = document.getElementById("contrasena").value;

    if (vcorreo == "" || vcontrasena == "") {
        //alert("here");
        document.getElementById("respuesta").innerHTML = "<br><p class='error'><em>Rellene los campos necesarios...</em></p>";
    } else {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "../../controladores/usuario/login.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("correo=" + vcorreo + "&contrasena=" + vcontrasena);
    }
    return false;

}