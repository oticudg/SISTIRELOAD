<!-- REQUIRED JS SCRIPTS -->
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url ('/plugins/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.es.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/validator.min.js') }}"></script>
<script src="{{ url ('/plugins/validator.min.js') }}"></script>
<script src="{{ url ('/plugins/sweetalert2.min.js') }}"></script>

<script type="text/javascript">
     //Date picker
    $('.date').datepicker({
      format: "yyyy/mm/dd",
        todayBtn: true,
        clearBtn: true,
        language: "es",
        orientation: "bottom auto",
        autoclose: true,
        todayHighlight: true
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: location.origin + '/states',
        dataType: 'json'
    })
    .done(function(res){
        for(var r in res) {
            $("#state").append("<option value='"+r+"'>"+res[r]+"</option>");
        }
    });


    $("#state").change(function(){
        $.ajax({
            url: location.origin + '/municipalities',
            method: 'POST',
            dataType: 'json',
            data: {
                id: $(this).val()
            }
        })
        .done(function(res){
            $("#municipality").html("<option value='' disabled selected>Ingrese el municipio</option>");
            $("#parish").html("<option value='' disabled selected>Ingrese la parroquia</option>");
            for(var r in res) {
                $("#municipality").append("<option value='"+r+"'>"+res[r]+"</option>");
            }
        });
    });

    $("#municipality").change(function(){
        $.ajax({
            url: location.origin + '/parishes',
            method: 'POST',
            dataType: 'json',
            data: {
                id: $(this).val()
            }
        })
        .done(function(res){
            $("#parish").html("<option value='' disabled selected>Ingrese la parroquia</option>");
            for(var r in res) {
                $("#parish").append("<option value='"+r+"'>"+res[r]+"</option>");
            }
        });
    });

     $.ajax({
        url: location.origin + '/foreigncountries',
        dataType: 'json'
    })
    .done(function(res){
        for(var r in res) {
            $("#foreigncountry").append("<option value='"+r+"'>"+res[r]+"</option>");
        }
    });

    $.ajax({
        url: location.origin + '/triages',
        dataType: 'json'
    })
    .done(function(res){
        for(var r in res) {
            $("#triage").append("<option value='"+r+"'>"+res[r]+"</option>");
        }
    });


</script>
<script type="text/javascript">
     var table = $('#records-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax:{
                type:'POST',    
                url:'api/index',
                headers:{
                   'X-CSRF-TOKEN': '{{csrf_token()}}' 
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization');
                },
                complete: function(){
                    $(".show-index").click(function(e){
                        e.preventDefault();
                        let url=$(this).attr('href');
                        $.ajax({
                            url: url,
                            method: 'GET',
                            dataType: 'json',
                        })
                        .done(function(res){
                            $("#records td#numbrecord").text(res.number_record);
                            $("#records td#typedoc").text(res.type_doc);
                            $("#records td#patientid").text(res.patient_id);
                            $("#records td#names").text(res.name);
                            $("#records td#lastnames").text(res.last_name);
                            $("#records td#sex").text(res.sex);
                            $("#records td#birthdate").text(res.birthdate);
                            $("#records td#admission").text(res.admission_date);
                            $("#records td#triage").text(res.triage.triage);
                            $("#records td#egress").text(res.egress_date);
                            $("#records td#state").text(res.parish.municipalities.states.state);
                            $("#records td#municipality").text(res.parish.municipalities.municipality);
                            $("#records td#parish").text(res.parish.parish);
                            $("#records td#foreigncountry").text(res.foreign_country.foreign_country);
                            $("#records td#observation").text(res.observation);
                            $("#records td#user").text(res.user.name);
                            $('#modal-showr').modal('toggle');
                            
                        });
                    });
                }
                },
                language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
                },
                columns: [
                {data:'number_record', name:'number_record'},
                {data:'patient_id', name:'patient_id'},
                {data:'name', name:'name'},
                {data:'last_name', name:'last_name'},
                {data:'admission_date', name:'admission_date'},
                {
                    data: 'action',
                    searchable:false,
                    sortable:false
                }  
                ]
              });
            $("#searchrec").click(function (e) {
            e.preventDefault();
            $("table#records-table tfoot").fadeToggle();
              })
                // Adicion de inputs a cada una de las columnas en tablas
            $('#records-table tfoot th').each( function () {
                var title = $('#records-table thead th').eq( $(this).index() ).text();
                $(this).html( '<input type="text" style="width:100%; box-sizing:border-box;" class="form-control input-sm" placeholder="Buscar por '+title+'" />');
            } );
                // aplicando filtro en los inputs de la tabla
            $("#records-table tfoot input").on( 'keyup change', function () {
                table
                    .column( $(this).parent().index()+':visible' )
                    .search( this.value )
                    .draw();
            } );

  

       $('#addform').click(function(e){
            e.preventDefault();
            let href = $(this).attr('href');
            $('#modalform form').attr('action', href);
            $('#modalform form input[name=_method]').val('POST');
            $('#modalform form')[0].reset();
            $('#modalform .modal-title').text('Crear Historia');
            $('#modalform').modal('toggle');
       });


       $('#modalform form#formu').submit(function(e){
            e.preventDefault();
            let url = $(this).attr('action');
            let data = $(this).serialize();
            $.ajax({
            url: url,
            method: 'POST',
            dataType: 'json',
            data: data
            })
            .done(function(res){
                console.log(res)
                $('#modalform').modal('toggle');
                $('#modalform form')[0].reset();
                table.draw();

            });
       })

       $('#typedoc').change(function(){
         let value = $(this).val();
        $('#foreigncountry, #idpatient').removeAttr('disabled');
         
         if(value == 'Venezolano/a'){

            $('#foreigncountry').attr('disabled','');

         } else if(value == 'N/p'){
            $('#idpatient').attr('disabled','');
            $('#foreigncountry').attr('disabled','');
         }
       })


 

</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->