<script src="{{ url ('/plugins/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.es.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/validator.min.js') }}"></script>
<script src="{{ url ('/plugins/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.date').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: true,
        clearBtn: true,
        language: "es",
        orientation: "bottom auto",
        autoclose: true,
        todayHighlight: true
    });
    $.ajax({
        url: location.origin + '/states',
        dataType: 'json'
    })
    .done(function (res) {
        for (var r in res) {
            $("#state").append("<option value='" + r + "'>" + res[r] + "</option>");
        }
    });

    /*funciones */
    function disabledDocs($string) {
        let value = $string;
        $('#foreigncountry, #patient_id').removeAttr('disabled');
        console.log($string);
        if (value == 'Venezolano/a') {
            $('#foreigncountry').attr('disabled', '').val('');
        } else if (value == 'N/p') {
            $('#foreigncountry, #patient_id').attr('disabled', '').val('');
        }
    }
    $("#state").change(function () {
        selectMunicipalities($(this).val());
    });

    function selectMunicipalities(id) {
        $.ajax({
            url: location.origin + '/municipalities',
            method: 'POST',
            dataType: 'json',
            data: {
                id: id
            }
        })
        .done(function (res) {
            $("#municipality").html("<option value='' disabled selected>Ingrese el municipio</option>");
            $("#parish").html("<option value='' disabled selected>Ingrese la parroquia</option>");
            for (var r in res) {
                $("#municipality").append("<option value='" + r + "'>" + res[r] + "</option>");
            }
        });
    }

    function selectParishes(id) {
        $.ajax({
            url: location.origin + '/parishes',
            method: 'POST',
            dataType: 'json',
            data: {
                id: id
            }
        })
        .done(function (res) {
            $("#parish").html("<option value='' disabled selected>Ingrese la parroquia</option>");
            for (var r in res) {
                $("#parish").append("<option value='" + r + "'>" + res[r] + "</option>");
            }
        });
    }
    $("#municipality").change(function () {
        selectParishes($(this).val());
    });
    $.ajax({
        url: location.origin + '/foreigncountries',
        dataType: 'json'
    })
    .done(function (res) {
        for (var r in res) {
            $("#foreigncountry").append("<option value='" + r + "'>" + res[r] + "</option>");
        }
    });
    $.ajax({
        url: location.origin + '/triages',
        dataType: 'json'
    })
    .done(function (res) {
        for (var r in res) {
            $("#triage").append("<option value='" + r + "'>" + res[r] + "</option>");
        }
    });
    var table = $('#records-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        render: true,
        searching: false,
        language: {
            sProcessing: 'Procesando...',
            sLengthMenu: 'Mostrar _MENU_ registros',
            sZeroRecords: 'No se encontraron resultados',
            sEmptyTable: 'Ningún dato disponible en esta tabla',
            sInfo: 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
            sInfoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
            sInfoFiltered: '(filtrado de un total de _MAX_ registros)',
            sInfoPostFix: '',
            sSearch: 'Buscar:',
            sUrl: '',
            sInfoThousands: ',',
            sLoadingRecords: 'Cargando...',
            oPaginate: {
                sFirst: 'Primero',
                sLast: 'Último',
                sNext: 'Siguiente',
                sPrevious: 'Anterior'
            },
            oAria: {
                sSortAscending: ': Activar para ordenar la columna de manera ascendente',
                sSortDescending: ': Activar para ordenar la columna de manera descendente'
            }
        },
        columns: [{
            data: 'number_record',
            name: 'number_record'
        },
        {
            data: 'patient_id',
            name: 'patient_id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'last_name',
            name: 'last_name'
        },
        {
            data: 'birthdate',
            name: 'birthdate'
        },
        {
            data: 'admission_date',
            name: 'admission_date'
        },
        {
            data: 'action',
            searchable: false,
            sortable: false
        }
        ],
        ajax: {
            type: 'POST',
            url: 'api/index',
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            data: function (d) {
                d.number_record = $('input[name=number_record]').val();
                d.patient_id = $('input[name=patient_id]').val();
                d.name = $('input[name=name]').val();
                d.last_name = $('input[name=last_name]').val();
                d.birthdate = $('input[name=birthdate]').val();
                d.admission_date = $('input[name=admission_date]').val();
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization');
            },
            complete: function () {
                $(".show-index, .edit-index, .destroy-index").click(function (e) {
                    e.preventDefault();
                    let url = $(this).attr('href');
                    let update = $(this).attr('update');
                    let show = $(this).attr('class').lastIndexOf('show');
                    let edit = $(this).attr('class').lastIndexOf('edit');
                    let destroy = $(this).attr('class').lastIndexOf('destroy');
                    if (destroy !== -1) {
                        var method = 'POST';
                        var data = {
                            '_method': 'DELETE',
                        };
                    } else {
                        var method = 'GET';
                        var data = {};
                    }
                    $.ajax({
                        url: url,
                        method: method,
                        dataType: 'json',
                        data: data
                    })
                    .done(function (res) {
                        if (show !== -1) {
                            $("#records td#number_record").text(res.number_record);
                            $("#records td#type_doc").text(res.type_doc);
                            $("#records td#patient_id").text(res.patient_id);
                            $("#records td#name").text(res.name);
                            $("#records td#last_name").text(res.last_name);
                            $("#records td#sex").text(res.sex);
                            $("#records td#birthdate").text(res.birthdate);
                            $("#records td#admission_date").text(res.admission_date);
                            $("#records td#triage").text(res.triage.triage);
                            $("#records td#egress_date").text(res.egress_date);
                            $("#records td#observation").text(res.observation);
                            $("#records td#user").text(res.user.name);
                            if (res.parish) {
                                $("#records td#state").text(res.parish.municipalities.states.state);
                                $("#records td#municipality").text(res.parish.municipalities.municipality);
                                $("#records td#parish").text(res.parish.parish);
                            }
                            if (res.foreign_country) {
                                $("#records td#foreigncountry").text(res.foreign_country.foreign_country);
                            }
                            $('#modal-showr .modal-title').text('Historia completa');
                            $('#modal-showr').modal('toggle');
                        } else if (edit !== -1) {
                            $('#modalform form').attr('action', update);
                            $('#modalform form input[name=_method]').val('PUT');
                            $('#modalform form')[0].reset();
                            $('#modalform .modal-title').text('Editar Historia');
                            $("#modalform #number_record").val(res.number_record);
                            $("#modalform #type_doc").val(res.type_doc);
                            $("#modalform #patient_id").val(res.patient_id);
                            $("#modalform #name").val(res.name);
                            $("#modalform #last_name").val(res.last_name);
                            $("#modalform #sex").val(res.sex);
                            $("#modalform #birthdate").val(res.birthdate);
                            $("#modalform #admission_date").val(res.admission_date);
                            $("#modalform #triage").val(res.triage.id);
                            $("#modalform #egress_date").val(res.egress_date);
                            $("#modalform #observation").val(res.observation);
                            $("#modalform #user").val(res.user.name);
                            if (res.foreign_country) {
                                $("#modalform #foreigncountry").val(res.foreign_country.id);
                            }
                            if (res.parish) {
                                $("#modalform #state").val(res.parish.municipalities.states.id);
                                selectMunicipalities(res.parish.municipalities.states.id);
                                selectParishes(res.parish.municipalities.id);
                                setTimeout(function () {
                                    $("#modalform #municipality").val(res.parish.municipalities.id);
                                    $("#modalform #parish").val(res.parish.id);
                                }, 1000);
                            }
                            disabledDocs($('#type_doc').val());
                            $('#modalform').modal('toggle');
                        } else if (destroy !== -1) {
                            table.draw();
                        }

                    });
                });
},
},
});
$('#type_doc').change(function () {
    disabledDocs($(this).val());
});
$('#searchrec2').on('submit', function(e) {
        table.draw();
        e.preventDefault();
});
$("#searchrec").click(function (e) {
    e.preventDefault();
    $("div#header2").fadeToggle();
});
$('#addform').click(function (e) {
    e.preventDefault();
    let href = $(this).attr('href');
    $('#modalform form').attr('action', href);
    $('#modalform form input[name=_method]').val('POST');
    $('#modalform form')[0].reset();
    $('#modalform .modal-title').text('Crear Historia');
    $('#modalform').modal('toggle');
});
$('#modalform form#formu').submit(function (e) {
    e.preventDefault();
    let url = $(this).attr('action');
    let data = $(this).serialize();
    $.ajax({
        url: url,
        method: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function () {
        $('#modalform').modal('toggle');
        $('#modalform form')[0].reset();
        table.draw();
    });
});
</script>