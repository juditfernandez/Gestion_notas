function validacionForm() {
    //alert('Hello World');
    var email=document.getElementById('email').value;
    var password=document.getElementById('passwd').value;
    //var message=document.getElementById('message').value;
    if(email=='' && password==''){
        alert("Ninguna de los dos campos no estan informados");
    } else if(email==''){
        alert("El campo sin informar es el email");
    } else if(password==''){
        alert("El campo sin informar es el del password");
    }else{
        return true;
    }
    //document.getElementById("message").innerHTML = '<p style="color:red">' +texto+'</p>';
    return false;
}

    /*if(email=='' && password==''){
        alert('Los dos campos estan sin informar ');
    } else if(email==''){
        alert('El campo sin informar es el email');
        return false;
    } else if(password==''){
        alert('El campo sin informar es el del password');
        return false;
    }else{
        return true;
    }*/