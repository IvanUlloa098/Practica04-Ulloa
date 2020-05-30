function crearTelefono() {
    
    var telefono = document.getElementById("telefono").value;
    var tipo = document.getElementById("tipo").options[document.getElementById("tipo").selectedIndex].value;
    
    if (telefono == "" || tipo == "") {  
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

        xmlhttp.open("POST", "../../controladores/usuario/guardar_telefono.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("telefono="+ telefono+ "&tipo="+ tipo);
    }
    return false;

}