 <!-- /.card -->
<div class="content">
  <div class="card">
    <div class="card-header ">
      <h3 class="card-title">Listado tipos de documentos</h3>
      <!--modal de boton registar rol-->
      <button id="modal" type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">
      <i class="fas fa-plus"></i>
      Crear tipo
      </button>
     <!--fin modal de boton registar rol-->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tabla-documento" class="table table-bordered table-striped">
        <thead class="bg-info">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Fecha de Creación</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody id="datos">
          <tr>
          @foreach ($tipoDoc as $tipo_documento)
            <td>{{$tipo_documento->Id_Tp_Doc}}</td>
            <td>{{$tipo_documento->Nombre}}</td>
            <td>{{$tipo_documento->updated_at}}</td>
            <td>
              <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-editar" onclick="Editar('{{$tipo_documento->Id_Tp_Doc}}','{{$tipo_documento->Nombre}}')">
                <i class="fa fa-pen"></i>
              </button>
              <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-eliminar" onclick="Eliminar('{{$tipo_documento->Id_Tp_Doc}}','{{$tipo_documento->Nombre}}')">
                <i class="fa fa-times"></i>
              </button>
             </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.card -->
<script type="text/javascript">
//iniciacion de tabls de roles
$(function () {
   $("#tabla-documento").DataTable({
    "responsive": true,
    "autoWidth": true,
    });
  });
</script>