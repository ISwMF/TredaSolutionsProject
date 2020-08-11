function obtenerFecha() {
    var d = new Date();
    var dia = d.getDate();
    var mes = (d.getMonth() + 1);
    var ano = d.getFullYear();
    if (dia < 10) {
        dia = "0" + dia;
    }
    if (mes < 10) {
        mes = "0" + mes;
    }
    return dia + "-" + mes + "-" + ano;
}

function enviarSolicitudProducto() {
    var nombre = arguments[0];
    var descripcion = arguments[1];
    var valor = arguments[2];
    var tienda_id = arguments[3].split("-");
    tienda_id = tienda_id[0].substring(0, tienda_id[0].length - 1);
    var imagen = arguments[4];
    if (nombre == "" || descripcion == "" || valor == "" || tienda_id == "" || imagen == "") {
        alert("Uno de los datos está vacio");
    } else {
        var fecha = obtenerFecha();
        $.ajax({
            url: '/agregarproducto',
            data: {
                "_token": $('#token').val(),
                nombre: nombre,
                descripcion: descripcion,
                valor: valor,
                tienda_id: tienda_id,
                imagen: imagen,
                fecha: fecha
            },
            type: 'POST',
            success: function (json) {
                if (json.respuesta == "hecho") {
                    $("#formulario-producto").remove();
                    $("#presentacion").append('<h5 class="card-header">Petición realizada con exito</h5>');
                } else {
                    $("#presentacion").append('<h5 class="card-header">Hay un error en los datos</h5>');
                }
            },
            error: function (jqXHR, textStatus, error) {
                if (jqXHR.status === 0) {
                    alert('Not connect: Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500].');
                } else if (textStatus === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (textStatus === 'timeout') {
                    alert('Time out error.');
                } else if (textStatus === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error: ' + jqXHR.responseText);
                }
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                alert('Not connect: Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (textStatus === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (textStatus === 'timeout') {
                alert('Time out error.');
            } else if (textStatus === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error: ' + jqXHR.responseText);
            }
        });
    }
}

function enviarSolicitudTienda() {
    var nombre = arguments[0];
    if (nombre == "") {
        alert("Por favor ingresa un nombre")
    } else {
        $.ajax({
            url: '/agregartienda',
            data: {
                "_token": $('#token').val(),
                nombre: nombre
            },
            type: 'POST',
            success: function (json) {

                if (json.respuesta == "hecho") {
                    $("#formulario-producto").remove();
                    $("#presentacion").append('<h5 class="card-header">Petición realizada con exito</h5>');
                } else {
                    $("#presentacion").append('<h5 class="card-header">Hay un error en los datos</h5>');
                }

            },
            error: function (jqXHR, textStatus, error) {
                if (jqXHR.status === 0) {
                    alert('Not connect: Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500].');
                } else if (textStatus === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (textStatus === 'timeout') {
                    alert('Time out error.');
                } else if (textStatus === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error: ' + jqXHR.responseText);
                }
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0) {
                alert('Not connect: Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (textStatus === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (textStatus === 'timeout') {
                alert('Time out error.');
            } else if (textStatus === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error: ' + jqXHR.responseText);
            }
        });
    }
}