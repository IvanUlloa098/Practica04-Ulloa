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