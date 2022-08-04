<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container" style="padding-top:1%">
    <div style="float: right; padding-bottom:1%" ><a class="btn btn-info" href="javascript:void(0)" id="crearProducto"> Crear Producto</a></div>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Sucursal</th>
                    {{-- <td>{{ $data->sucursal->nombre }}</td> --}}
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th width="140px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>

<div class="modal fade" id="formulario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="prodForm" name="prodForm" class="form-horizontal">
                   <input type="hidden" name="id" id="id">
                   <div class="form-group">
                        <label for="codigo" class="col-sm-2 control-label">Código</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingresar Código" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar Nombre" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria" class="col-sm-2 control-label">Categoría</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingresar Categoría" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sucursale_id" class="col-sm-2 control-label">Sucursal</label>
                        <div class="col-sm-12">
                            <select name="sucursale_id" id="sucursale_id" class="form-control">
                            <option selected>Seleccione una Opción</option>
                            <option value="1">Sucursal La Florida</option>
                            <option value="2">Sucursal San Bernardo</option>
                            <option value="3">Sucursal Baquedano</option>
                            </select>
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">descripción</label>
                        <div class="col-sm-12">
                            <textarea id="descripcion" name="descripcion" required placeholder="Ingresar Descripción" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresar Cantidad" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precio" class="col-sm-2 control-label">Precio</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresar Precio" value="" required>
                        </div>
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="guardar" value="create">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('productos.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'codigo', name: 'codigo'},
            {data: 'nombre', name: 'nombre'},
            {data: 'categoria', name: 'categoria'},
            {data: 'sucursale_id', name: 'sucursal'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'cantidad', name: 'cantidad'},
            {data: 'precio', name: 'precio'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    $('#crearProducto').click(function () {
        $('#guardar').val("crear-producto");
        $('#id').val('');
        $('#prodForm').trigger("reset");
        $('#modelHeading').html("Crear Nuevo Producto");
        $('#formulario').modal('show');
    });
    $('body').on('click', '.editProd', function () {
      var id = $(this).data('id');
      $.get("{{ route('productos.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Editar Producto");
          $('#guardar').val("edit-user");
          $('#formulario').modal('show');
          $('#id').val(data.id);
          $('#codigo').val(data.codigo);
          $('#nombre').val(data.nombre);
          $('#categoria').val(data.categoria);
          $('#sucursale_id').val(data.sucursale_id);
          $('#descripcion').val(data.descripcion);
          $('#cantidad').val(data.cantidad);
          $('#precio').val(data.precio);
      })
   });
   $('#guardar').click(function (e) {
        e.preventDefault();
        $(this).html('Enviando..');
    
        $.ajax({
          data: $('#prodForm').serialize(),
          url: "{{ route('productos.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#prodForm').trigger("reset");
              $('#formulario').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#guardar').html('Guardar Cambios');
          }
      });
    });
    $('body').on('click', '.deleteProd', function () {
     
     var id = $(this).data("id");
     confirm("¿Estás seguro de eliminar este producto?");
   
     $.ajax({
         type: "DELETE",
         url: "{{ route('productos.store') }}"+'/'+id,
         success: function (data) {
             table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
 });
  });
</script>
</html>