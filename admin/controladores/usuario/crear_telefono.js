function crearTelefono() {

    var nombre = document.getElementById("nombre").value;
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

        xmlhttp.send("nombre="+nombre+"&telefono=" + telefono + "&tipo=" + tipo);
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