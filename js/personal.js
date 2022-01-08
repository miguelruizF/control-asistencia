$(document).ready(function() {

    tablaPersonal = $('#tbPersonal').DataTable({
        'language': {
            "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },
        'columns': [{
            'targets': -1,
            'data': 'null',
            'defaultContent': "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'>VER MÁS</button><button class='btn btn-danger btn-sm btnBorrar'>EDITAR</button></div></div>"
        }],
        "reponsive": true
    });

    /*

    var fila;
    $('#formDominios').submit(function(e) {
        e.preventDefault();
        nombre = $.trim($('#nombre').val());
        f_inicial = $.trim($('#f_inicial').val());
        f_final = $.trim($('#f_final').val());
        estado = $.trim($('#estado').val());
        status_dom = $.trim($('#status').val());

        $.ajax({
            url: 'bd/crud.php',
            type: 'POST',
            datatype: 'json',
            data: { id: id, nombre: nombre, f_inicial: f_inicial, f_final: f_final, estado: estado, status_dom: status_dom, opcion: opcion },
            success: function(data) {
                tablaDominios.ajax.reload(null, false);
            }
        });
        $('#modalCrud').modal('hide');
    });

    //CREAR UN NUEVO REGISTRO
    $("#btnNuevo").click(function() {
        opcion = 1;
        id = null;
        $("#formDominios").trigger('reset');
        $(".modal-header").css("background-color", "black");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Dominio");
        $("#modalCrud").modal('show');
    });

    //EDITAR UN REGISTRO
    $(document).on('click', '.btnEditar', function() {
        opcion = 2;
        fila = $(this).closest('tr');
        id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(1)').text();
        f_inicial = fila.find('td:eq(2)').text();
        f_final = fila.find('td:eq(3)').text();
        estado = fila.find('td:eq(4)').text();
        status_dom = fila.find('td:eq(5)').text();
        $("#nombre").val(nombre);
        $("#f_inicial").val(f_inicial);
        $("#f_final").val(f_final);
        $("#estado").val(estado);
        $("#status").val(status_dom);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Dominio");
        $("#modalCrud").modal('show');
    });

    //BORRAR REGISTRO
    $(document).on('click', '.btnBorrar', function() {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3;
        var respuesta = confirm("¿Estas seguro de borrar el registro " + id + "?");
        if (respuesta) {
            $.ajax({
                url: "../bd/crud.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    tablaDominios.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });
    */
});