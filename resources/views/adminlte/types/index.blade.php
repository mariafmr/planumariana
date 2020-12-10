@extends('plantilla.admin')
@section('title',' Tipos Amenazas')
@section('titulo','TIPOS DE AMENAZAS')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('tipoamenazas.index')}}"> TIPOS DE AMENAZAS</a></li>
@endsection
@section('content')

 <div id="confirmareliminar" class="row">

    <span style="display:none;" id="urlbase">{{route('tipoamenazas.index')}}</span>
  
    
          
          <div class="card-body table-responsive p-0" >
            <div class="card mb-3">
                <div class="card-header">         
                  <i class="fas fa-table"></i>
                  Listado de los tipos de amenazas
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
                  <a class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true"  href="{{ route('tipoamenazas.create') }}">Crear Tipos Amenazas</a>
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
                    <th>TIPOS</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
      
                    @foreach ($types as $type)
                        <tr>
                            <td> {{$type->id }} </td>
                            <td> {{$type->subtitle }} </td>
                            <td> {{$type->title }} </td>
                            <td> {{$type->content }} </td>
                            <td> {{$type->content_long }} </td>
                            <td> {{$type->images->count()}} </td>
                            <td> 
                              @if ($type->images->count()<=0 )
                            <img style="height: 100px;    width: 100px;" src="/imagenes/avatar.png" class="rounded-circle">
                            @else
                                <img style="height: 100px;    width: 100px;" src="{{ $type->images->random()->url }}" class="rounded-circle">   
                            @endif
                            </td>
                            
                            <td> {{$type->threat_id }} </td>

                            <td>
                              <a href="/tipoamenazas/{{ $type['id'] }}/edit"><i class="fa fa-edit"></i></a>
                              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$type['id']}}"><i class="fas fa-trash-alt"></i></a>
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
                  <th>TIPOS</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
                  {{ $types->appends($_GET)->links() }}
          </div>
  
  
   @endsection  