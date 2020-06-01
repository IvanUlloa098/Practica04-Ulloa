function modificarUsuario() {

    var vcodigo = document.getElementById("codigo").value;
    
    //var vcontrasena = document.getElementById("contrasena").value;

    if (vcodigo=="") {
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

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta").innerHTML = this.responseText;
            }
        };

        xmlhttp.open("GET","../../controladores/usuario/eliminar_datos.php?cod="+vcodigo,true);
        alert(vcodigo);
        xmlhttp.send();

    }
    return false;

}