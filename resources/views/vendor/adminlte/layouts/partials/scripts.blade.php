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
<script type="text/javascript">
     //Date picker
    $('.date').datepicker({
      format: "dd/mm/yyyy",
        todayBtn: true,
        clearBtn: true,
        language: "es",
        orientation: "bottom auto",
        autoclose: true,
        todayHighlight: true
    })
</script>

<script type="text/javascript">
     var table = $('#records-table').DataTable({
                processing: true,
                serverSide: true,
    
                ajax:{
                url:'{{ route('api.record') }}',
                headers:{
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization');
                }
            },
                columns: [
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'last_name', name: 'last_name'},
                  {data: 'action', name: 'accion', orderable: false, searchable: false}
                ]
              });

</script>
{{-- <script>
// Dibujando data  
  $(document).ready(function(){
    
        var table = $('#users-table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax:{
                url:'users-data',
                headers:{
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization');
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
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {
                    data: 'action',
                    searchable:false,
                    sortable:false
                }  
            ]
        });
        $("#searchu").click(function (e) {
            e.preventDefault();
            $("table#users-table tfoot").toggle();
        })
                // Adicion de inputs a cada una de las columnas en tablas
            $('#users-table tfoot th').each( function () {
                var title = $('#users-table thead th').eq( $(this).index() ).text();
                $(this).html( '<input type="text" style="width:100%; box-sizing:border-box;" class="form-control input-sm" placeholder="Buscar por '+title+'" />' );
            } );
                // aplicando filtro en los inputs de la tabla
            $("#users-table tfoot input").on( 'keyup change', function () {
                table
                    .column( $(this).parent().index()+':visible' )
                    .search( this.value )
                    .draw();
            } );
    });
</script> --}}

{{-- <script type="text/javascript">
     

      function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Crear Historia');
      }

      $(function(){
        $('#modal-form form').validator().on('submit', function (e) {
          if (!e.isDefaultPrevented()){
            var id = $('#id').val();
            if (save_method == 'add') url = "{{ url('item') }}";
            else url = "{{ url('item') . '/' }}" + id;

            $.ajax({
                url : url,
                type : "POST",
                data : $('#modal-form form').serialize(),
                success : function($data) {
                  $('#modal-form').modal('hide');
                  table.ajax.reload();
                },
                error : function(){
                  alert('Ooops! Algo esta mal!');
                } 
            });
            return false;
          }
        });
      });

    </script> --}}




<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
