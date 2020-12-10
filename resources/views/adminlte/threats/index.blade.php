@extends('plantilla.admin')
@section('title',' Amenazas')
@section('titulo','AMENAZAS')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('amenazas.index')}}"> AMENAZAS</a></li>
@endsection
@section('content')
 <div id="confirmareliminar" class="row">

    <span style="display:none;" id="urlbase">{{route('amenazas.index')}}</span>  
          
          <div class="card-body table-responsive p-0" >
            <div class="card mb-3">
                <div class="card-header">         
                  <i class="fas fa-table"></i>
                  Listado de las amenazas
                   <!-- /.BUSCADOR -->
                  <div class="card-tools">
                    <form>              
                      <div class="input-group input-group-sm" style="width: 200px;">
                        <input type="text" name="title" class="form-control float-right" 
                        placeholder="Buscar"
                        value="{{ request()->get('title') }}">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.CERRAR BUSCADOR -->
                  <br>
                  <hr>
                  <a class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true"  href="{{ route('amenazas.create') }}">Crear Amenazas</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
           

        
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÍTULO PRINCIPAL</th>
                    <th>TÍTULO</th>
                    <th>CONTENIDO CORTO</th>
                    <th>CONTENIDO LARGO</th>
                    <th>CANTIDAD IMÁGENES</th>
                    <th>IMAGEN</th>
                    <th>USUARIOS</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
      
                    @foreach ( $threats as $threat)
                        <tr>
                            <td> {{$threat->id }} </td>
                            <td> {{$threat->subtitle }} </td>
                            <td> {{$threat->title }} </td>
                            <td> {{$threat->content }} </td>
                            <td> {{$threat->content_long }} </td>
                            <td> {{$threat->images->count()}} </td>
                            <td> 
                              @if ($threat->images->count()<=0 )
                            <img style="height: 100px;    width: 100px;" src="/imagenes/avatar.png" class="rounded-circle">
                            @else
                                <img style="height: 100px;    width: 100px;" src="{{ $threat->images->random()->url }}" class="rounded-circle">   
                            @endif
                            </td>
                            <!--<td>{{ $threat->user['email'] }}</td>-->

                            <td>
                              <a href="/amenazas/{{ $threat['id'] }}/edit"><i class="fa fa-edit"></i></a>
                              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$threat['id']}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    @endforeach              
              
               
                <tr>
                  <th>ID</th>
                  <th>TÍTULO PRINCIPAL</th>
                  <th>TÍTULO</th>
                  <th>CONTENIDO CORTO</th>
                  <th>CONTENIDO LARGO</th>
                  <th>CANTIDAD IMÁGENES</th>
                  <th>IMAGEN</th>
                  <th>USUARIOS</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
                  {{ $threats->appends($_GET)->links() }}
          </div>
  <!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button>
      </div>
      <div class="modal-body">
        Seleccione "eliminar" si realmente desea eliminar esta publicación.</div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
      <form method="POST" action="amenazas/">
          @method('DELETE')
          @csrf
          <input type="hidden" id="post_id" name="post_id" value="">
          <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Eliminar</a>
      </form>
      </div>
  </div>
  </div>
</div>
  
   @endsection  
   @section('js_post_page')
   <script>
       $('#deleteModal').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget) 
           var post_id = button.data('postid') 
           
           var modal = $(this)
           modal.find('.modal-footer #post_id').val(post_id)
       })
   </script>
   @endsection