function buscarPorCedula() {
    
    var cedula = document.getElementById("cedula").value;
    
    if (cedula == "") {
        
        document.getElementById("telefonos").innerHTML = "";
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
                //alert("llegue");
                document.getElementById("telefonos").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../controladores/usuario/consultar_telefono.php?cedula="+cedula,true);
        xmlhttp.send();
    }
    return false;

}