function validate_name(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

// function validate_password(texto){
//     if (texto.length > 0){
//         var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
//         return reg.test(texto);
//     }
//     return false;
// }

function validate_description(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

// function validate_DNI(dni){
//   var numero = dni.substr(0,dni.length-1);
//   var let = dni.substr(dni.length-1,1);
//   numero = numero % 23;
//   var letra='TRWAGMYFPDXBNJZSQVHLCKET';
//   letra=letra.substring(numero,numero+1);
//   if (letra!=let){
//       return false;
//   }else{
//       return true;
//   }
// }

function validate_category(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_lvl(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_fini(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_ffin(texto){
    if(texto.length > 0){
        return true;
    }
    return false;
}

function validate_price(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_hours(texto){
    if(texto.length > 0){
        var reg=/^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false
}

// function validate_idioma(array){
//     var check=false;
//     for ( var i = 0, l = array.options.length, o; i < l; i++ ){
//         o = array.options[i];
//         if ( o.selected ){
//             check= true;
//         }
//     }
//     return check;
// }

// function validate_aficion(array){
//     var i;
//     var ok=0;
//     for(i=0; i<array.length;i++){
//         if(array[i].checked){
//             ok=1
//         }
//     }
 
//     if(ok==1){
//         return true;
//     }
//     if(ok==0){
//         return false;
//     }
// }

function validate(){
    // console.log('hola validate js');
    // return false;

    var check=true;
    
    var v_name=document.getElementById('name').value;
    // console.log(v_name);
    // return false;
    var v_description=document.getElementById('description').value;
    var v_category=document.getElementsByName('category');
    var v_lvl=document.getElementsByName('lvl');
    var v_fini=document.getElementById('fini').value;
    var v_ffin=document.getElementById('ffin').value;
    var v_price=document.getElementById('price').value;
    var v_hours=document.getElementById('hours').value;
    
    var r_name=validate_name(v_name);
    // console.log(r_name);
    // return false;
    var r_description=validate_description(v_description);
    var r_category=validate_category(v_category);
    var r_lvl=validate_lvl(v_lvl);
    var r_fini=validate_fini(v_fini);
    var r_ffin=validate_ffin(v_ffin);
    var r_price=validate_price(v_price);
    var r_hours=validate_hours(v_hours);
    
    if(!r_name){
        document.getElementById('error_name').innerHTML = " * El nombre introducido no es valido";
        // console.log(name);
        // return false;
        check=false;
    }else{
        document.getElementById('error_name').innerHTML = "";
    }
    if(!r_description){
        document.getElementById('error_description').innerHTML = " * Introduce una descripción válida";
        check=false;
    }else{
        document.getElementById('error_description').innerHTML = "";
    }
    if(!r_category){
        document.getElementById('error_category').innerHTML = " * Selecciona una categoria";
        check=false;
    }else{
        document.getElementById('error_category').innerHTML = "";
    }
    if(!r_lvl){
        document.getElementById('error_lvl').innerHTML = " * Selecciona un nivel";
        check=false;
    }else{
        document.getElementById('error_lvl').innerHTML = "";
    }
    if(!r_fini){
        document.getElementById('error_fini').innerHTML = " * Introduce una fecha váilda";
        check=false;
    }else{
        document.getElementById('error_fini').innerHTML = "";
    }
    if(!r_ffin){
        document.getElementById('error_ffin').innerHTML = " * Introduce una fecha válida";
        check=false;
    }else{
        document.getElementById('error_ffin').innerHTML = "";
    }
    if(!r_price){
        document.getElementById('error_price').innerHTML = " * Introduce un precio válido";
        check=false;
    }else{
        document.getElementById('error_price').innerHTML = "";
    }
    if(!r_hours){
        document.getElementById('error_hours').innerHTML = " * Introduce un número de horas";
        check=false;
    }else{
        document.getElementById('error_hours').innerHTML = "";
    }
    return check;
}