function validate_name(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z+]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_description(texto) {
    if (texto && texto.length > 10) {
        return true;
    }
    return false;
}

function validate_category(texto) {
    var i;
    var ok = 0;
    for (i = 0; i < texto.length; i++) {
        if (texto[i].checked) {
            ok = 1;
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

function validate_lvl(texto) {
    var i;
    var ok = 0;
    for (i = 0; i < texto.length; i++) {
        if (texto[i].checked) {
            ok = 1;
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

function validate_fini(texto) {
    if (texto && texto.length === 10) {
        return true;
    }
    return false;
}

function validate_ffin(texto) {
    if (texto && texto.length === 10) {
        return true;
    }
    return false;
}

function validate_price(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_hours(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_idioma(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_state(array) {
    var i;
    var ok = 0;
    for (i = 0; i < array.length; i++) {
        if (array[i].checked) {
            ok = 1;
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

function validate(op) {
    // console.log('hola validate js');
    // return false;
    var check = true;

    var v_name = document.getElementById('name').value;
    // console.log(v_name);
    // return false;
    var v_description = document.getElementById('description').value;
    var v_category = document.getElementsByName('category');
    var v_lvl = document.getElementsByName('lvl');
    var v_fini = document.getElementById('fini').value;
    var v_ffin = document.getElementById('ffin').value;
    var v_idioma = document.getElementsByName('idioma');
    var v_state = document.getElementsByName('state[]');
    var v_price = document.getElementById('price').value;
    var v_hours = document.getElementById('hours').value;

    var r_name = validate_name(v_name);
    // console.log("Name " + r_name);
    // return false;
    var r_description = validate_description(v_description);
    // console.log("Description " + r_description);
    var r_category = validate_category(v_category);
    // console.log("Category " + r_category);
    var r_lvl = validate_lvl(v_lvl);
    // console.log("Lvl " + r_lvl);
    var r_fini = validate_fini(v_fini);
    // console.log("Fini " + r_fini);
    var r_ffin = validate_ffin(v_ffin);
    // console.log("Ffin " + r_ffin);
    var r_idioma = validate_idioma(v_idioma);
    // console.log("Idioma " + r_idioma);
    var r_state = validate_state(v_state);
    // console.log("State " + r_state);
    var r_price = validate_price(v_price);
    // console.log("Price " + r_price);
    var r_hours = validate_hours(v_hours);
    // console.log("Hours " + r_hours);

    if (!r_name) {
        document.getElementById('error_name').innerHTML = " * El nombre introducido no es valido";
        // console.log(r_name);
        // return false;
        check = false;
    } else {
        document.getElementById('error_name').innerHTML = "";
        // check = true;
    }
    if (!r_description) {
        document.getElementById('error_description').innerHTML = " * Introduce una descripción válida";
        check = false;
    } else {
        document.getElementById('error_description').innerHTML = "";
        // check = true;
    }
    if (!r_category) {
        document.getElementById('error_category').innerHTML = " * Selecciona una categoria";
        check = false;
    } else {
        document.getElementById('error_category').innerHTML = "";
        // check = true;
    }
    if (!r_lvl) {
        document.getElementById('error_lvl').innerHTML = " * Selecciona un nivel";
        check = false;
    } else {
        document.getElementById('error_lvl').innerHTML = "";
        // check = true;
    }
    if (!r_fini) {
        document.getElementById('error_fini').innerHTML = " * Introduce una fecha válida";
        check = false;
    } else {
        document.getElementById('error_fini').innerHTML = "";
        // check = true;
    }
    if (!r_ffin) {
        document.getElementById('error_ffin').innerHTML = " * Introduce una fecha válida";
        check = false;
    } else {
        document.getElementById('error_ffin').innerHTML = "";
        // check = true;
    }
    if (!r_idioma) {
        document.getElementById('error_idioma').innerHTML = " * Selecciona un idioma para el curso";
        check = false;
    } else {
        document.getElementById('error_idioma').innerHTML = "";
        // check = true;
    }
    if (!r_state) {
        document.getElementById('error_state').innerHTML = " * No has seleccionado ningun estado";
        check = false;
    } else {
        document.getElementById('error_state').innerHTML = "";
        // check = true;
    }
    if (!r_price) {
        document.getElementById('error_price').innerHTML = " * Introduce un precio válido";
        check = false;
    } else {
        document.getElementById('error_price').innerHTML = "";
        // check = true;
    }
    if (!r_hours) {
        document.getElementById('error_hours').innerHTML = " * Introduce un número de horas";
        check = false;
    } else {
        document.getElementById('error_hours').innerHTML = "";
        // check = true;
    }
    // return check;

    if (check){
        if (op == 'create'){
            document.getElementById('add_course').submit();
            document.getElementById('add_course').action = "index.php?page=controller_course&op=create";
        }
        if (op == 'update'){
            document.getElementById('update_car').submit();
            document.getElementById('update_car').action = "index.php?page=controller_course&op=update";
        }
    }
}

function operations_course(op){
    if (op == 'delete'){
        document.getElementById('delete_course').submit();
        document.getElementById('delete_course').action = "index.php?page=controller_course&op=delete";
    }
    if (op == 'delete_all'){
        // console.log("validate_course js delete_all");
        document.getElementById('delete_all_course').submit();
        document.getElementById('delete_all_course').action = "index.php?page=controller_course&op=delete_all";
    }
    if (op == 'dummies'){
        document.getElementById('dummies_course').submit();
        document.getElementById('dummies_course').action = "index.php?page=controller_course&op=dummies";
    }
}