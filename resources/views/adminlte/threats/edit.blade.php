@extends('plantilla.admin')
@section('title','Editar Amenazas')
@section('titulo','EDITAR AMENAZAS')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('amenazas.create')}}">CREAR AMENAZAS</a></li>
@endsection
@section('titulo1')
  <li class="breadcrumb-item"><a href="{{route('amenazas.index')}}">AMENAZAS</a></li>
@endsection


@section('content')
<form  method="POST" action="{{route('amenazas.update',$threat->id)}}" enctype="multipart/form-data" >
    @csrf  
    @method('PUT')

        <!-- Datos de las amenazas  $threat }} -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de las amenazas</h3>
    
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                  <div class="form-group">
                      <label for="subtitle">Título Principal</label>
                      <input type="text" name="subtitle" class="form-control"
                       id="subtitle" placeholder="Título Principal...." value="{{$threat->subtitle }}">
                  </div>
                  <div class="form-group">
                      <label for="title">Título</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Título..." value="{{ $threat->title }}">
                  </div>
                                      
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de las amenazas 
              </div>
            </div>
            <!-- /.card -->
    
    
          </div><!-- /.container-fluid -->
        </section>
        <!-- Datos de las amenazas -->

        <!-- Descripciones -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Descripciones de las amenazas</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card-body">                   
                      <div class="form-group">
                          <label for="content1">Ingresar contenido corto</label>
                          <textarea name="threat_content1" id="content1">
                        
                           {!! $threat->threat_content1 !!}
                          </textarea>
                      </div> 
                      <div class="form-group">
                        <label for="content2">Ingresar contenido largo</label>
                        <textarea name="threat_content2" id="content2">
                          {!! $threat->threat_content2 !!}
                        </textarea>
                    </div>                
                    </div>             
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de las descripciones de las de amenazas 
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Descripciones -->
    
        <!-- Imagenes -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Imágenes de las amenazas</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                    
                  <label for="imagenes">Añadir imágenes</label> 
                                 
                  <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple 
                  accept="image/*" >
                  
                  <div class="description">
                   Un número ilimitado de archivos pueden ser cargados en este campo. 
                    <br>
                    Límite de 2048 MB por imagen.
                    <br>
                    Tipos permitidos: jpeg, png, jpg, gif, svg.
                    <br>
                  </div>
   
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-header">
                  <div class="card-title">
                   Galeria de imagenes
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
      
                    @foreach ($threat->images as $image)
                    <div id="idimagen-{{$image->id}}" class="col-sm-2">
                      <a href="{{ $image->url }}" data-toggle="lightbox" data-title="Id:{{ $image->id }}"  data-gallery="gallery">
                        <img style="width:150px; height:150px;" src="{{ $image->url }}" class="img-fluid mb-2" />
                      </a>
                      <br>
                      <a href="#"  data-toggle="modal" data-target="#deleteModal"
                       data-postid="{{$image['id']}}">
                       <i class="fas fa-trash-alt"></i>
                      </a>
                 
                    
                      <a href="{{ $image->url }}"
                          v-on:click.prevent="eliminarimagen({{$image}})"
                        >
                        <i class="fas fa-trash-alt" style="color:red"></i> Id:{{ $image->id }}
                      </a>
                    </div>
                    @endforeach                    
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de las imágenes de las amenazas 
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Imagenes -->

        <!-- Administración -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Administración</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">   
                <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a class="btn btn-danger" href="{{ route('amenazas.index') }}">Cancelar</a>
                            <input  type="submit" value="Guardar" class="btn btn-primary">
                          
                          </div>
                        </div>
                        <!-- /.col -->  
                </div>
              </div> 
         
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de las opciones
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Administración -->
     
 </form>

    <script>
        CKEDITOR.replace( 'threat_content1' );
        CKEDITOR.replace( 'threat_content2' );
    </script>

   
@endsection    