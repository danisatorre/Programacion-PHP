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

function validate_marca(texto) {
    if (texto && texto.length > 3) {
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

function validate_condicion(texto) {
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

function validate_entrega(texto) {
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

function validate_stock(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_tipo(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_sexo(array) {
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

function validate_talla(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_product(op) {
    // console.log('hola validate js');
    // return false;
    var check = true;

    var v_name = document.getElementById('nom_prod').value;
    // console.log(v_name);
    // return false;
    var v_description = document.getElementById('descripcion').value;
    var v_category = document.getElementsByName('categoria');
    var v_marca = document.getElementsByName('marca');
    var v_fini = document.getElementById('fini').value;
    var v_ffin = document.getElementById('ffin').value;
    var v_tipo = document.getElementsByName('tipo');
    var v_sexo = document.getElementsByName('sexo[]');
    var v_price = document.getElementById('price').value;
    var v_talla = document.getElementById('talla').value;
    var v_entrega = document.getElementById('entrega').value;
    var v_condicion = document.getElementById('condicion').value;
    var v_stock = document.getElementById('stock').value;

    var r_name = validate_name(v_name);
    // console.log("Name " + r_name);
    // return false;
    var r_description = validate_description(v_description);
    // console.log("Description " + r_description);
    var r_category = validate_tipo(v_category);
    // console.log("Category " + r_category);
    var r_marca = validate_talla(v_marca);
    // console.log("Lvl " + r_lvl);
    var r_fini = validate_fini(v_fini);
    // console.log("Fini " + r_fini);
    var r_ffin = validate_ffin(v_ffin);
    // console.log("Ffin " + r_ffin);
    var r_tipo = validate_tipo(v_tipo);
    // console.log("Idioma " + r_idioma);
    var r_sexo = validate_sexo(v_sexo);
    // console.log("State " + r_state);
    var r_price = validate_price(v_price);
    // console.log("Price " + r_price);
    var r_talla = validate_talla(v_talla);
    // console.log("Hours " + r_hours);
    var r_entrega = validate_tipo(v_entrega);
    var r_condicion = validate_tipo(v_condicion);
    var r_stock = validate_stock(v_stock);

    // revisar que la fecha de fin sea posterior a la de inicio
    var dfini = document.getElementById('fini').value;
    var dffin = document.getElementById('ffin').value;
    // convertir fechas al formato yyyy/mm/dd para poder compararlas
    var array_fini = dfini.split("/");
    var array_ffin = dffin.split("/");

    //debug para visualizar el array de las fechas
    // console.log(array_fini);
    // console.log(array_ffin);
    // return false;

    var date_fini = new Date(array_fini[2], array_fini[1] -1, array_fini[0]);
    // console.log(date_fini);
    // return false;
    var date_ffin = new Date(array_ffin[2], array_ffin[1] -1, array_ffin[0]);
    // console.log(date_ffin);
    // return false;

    //

    if (!r_name) {
        document.getElementById('error_nom_prod').innerHTML = " * El nombre introducido no es valido";
        // console.log(r_name);
        // return false;
        check = false;
    } else {
        document.getElementById('error_nom_prod').innerHTML = "";
        // check = true;
    }
    if (!r_description) {
        document.getElementById('error_descripcion').innerHTML = " * Introduce una descripción válida";
        check = false;
    } else {
        document.getElementById('error_descripcion').innerHTML = "";
        // check = true;
    }
    if (!r_category) {
        document.getElementById('error_categoria').innerHTML = " * Selecciona una categoria";
        check = false;
    } else {
        document.getElementById('error_categoria').innerHTML = "";
        // check = true;
    }
    if (!r_marca) {
        document.getElementById('error_marca').innerHTML = " * Introduce una marca";
        check = false;
    } else {
        document.getElementById('error_marca').innerHTML = "";
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
        if(date_ffin <= date_fini){
            document.getElementById('error_ffin').innerHTML = " * La fecha de fin debe ser posterior a la fecha de inicio";
            check = false;
        }else{
            document.getElementById('error_ffin').innerHTML = "";
        }
        // check = true;
    }
    if (!r_tipo) {
        document.getElementById('error_tipo').innerHTML = " * Selecciona un tipo para el producto";
        check = false;
    } else {
        document.getElementById('error_tipo').innerHTML = "";
        // check = true;
    }
    if (!r_sexo) {
        document.getElementById('error_sexo').innerHTML = " * No has seleccionado ningun estado";
        check = false;
    } else {
        document.getElementById('error_sexo').innerHTML = "";
        // check = true;
    }
    if (!r_price) {
        document.getElementById('error_price').innerHTML = " * Introduce un precio válido";
        check = false;
    } else {
        document.getElementById('error_price').innerHTML = "";
        // check = true;
    }
    if (!r_talla) {
        document.getElementById('error_talla').innerHTML = " * Selecciona una talla";
        check = false;
    } else {
        document.getElementById('error_talla').innerHTML = "";
        // check = true;
    }
    if (!r_entrega) {
        document.getElementById('error_entrega').innerHTML = " * Selecciona un tipo de entrega";
        check = false;
    } else {
        document.getElementById('error_entrega').innerHTML = "";
        // check = true;
    }
    if (!r_condicion) {
        document.getElementById('error_condicion').innerHTML = " * Selecciona una condición de como esta el producto";
        check = false;
    } else {
        document.getElementById('error_condicion').innerHTML = "";
        // check = true;
    }
    if (!r_stock) {
        document.getElementById('error_stock').innerHTML = " * Introduce cuanto stock hay del producto";
        check = false;
    } else {
        document.getElementById('error_stock').innerHTML = "";
        // check = true;
    }
    // return check;

    if (check){
        if (op == 'create'){
            // console.log("validate_product js create");
            // return false;
            document.getElementById('add_product').submit();
            document.getElementById('add_product').action = "index.php?page=controller_product&op=create";
        }
        if (op == 'update'){
            // console.log("validate_product js update");
            // return false;
            document.getElementById('update_product').submit();
            document.getElementById('update_product').action = "index.php?page=controller_product&op=update";
        }
    }
}

function showModal(name, id, category) {
    // console.log('hola showModal js');
    // console.log("NAME: "+ name + " ID: " + id + " CATEGORY: " + category);
    // return false;
    $("#product_details").show();
    // console.log(product_details);
    // return false;
    $("#modal_product").dialog({
        title: name,
        width : 850,
        height: 500,
        resizable: "false",
        modal: "true",
        hide: "scale",
        show: "scale",
        buttons : {
            Update: function() {
                        window.location.href = "index.php?page=controller_product&op=update&id=" + id;
                    },
            Delete: function() {
                        window.location.href = 'index.php?page=controller_product&op=delete&id=' + id + '&name=' + name + '&category=' + category;
                    }
        }
    });
}

function loadContentModal() {
    // console.log('hola loadContentModal js');
    // return false;
    $('.product').click(function () {
        var id = this.getAttribute('id');
        // console.log("ID del curso recogida (loadContentModal): " + id);
        // return false;
        ajaxPromise("module/product/controller/controller_product.php?op=read_modal", "POST", "json", {id: id})
        .then(function(data) {
            // console.log(data);
            // return false;
            // var data = JSON.parse(data);
            $('<div></div>').attr('id', 'product_details', 'type', 'hidden').appendTo('#modal_product');
            $('<div></div>').attr('id', 'container').appendTo('#product_details');
            $('#container').empty();
            $('<div></div>').attr('id', 'product_content').appendTo('#container');
            $('#product_content').html(function() {
                var content = "";
                for (row in data) {
                    console.log(row);
                    content += '<br><span>' + row + ': <span id =' + row + '>' + data[row] + '</span></span>';
                    // console.log(content);
                    // return false;
                }
                return content;
                });
                showModal(product = data.name, data.id, data.category);
        })
        .catch(function() {
            window.location.href = 'index.php?page=503';
        });
    });
 }

 $(document).ready(function() {
    // console.log('hola ready js');
    // return false;
    loadContentModal();
});