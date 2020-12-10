@extends('plantilla.admin')
@section('title',' Crear  Brigada')
@section('titulo','CREAR BRIGADA')
@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{route('brigadas.create')}}">CREAR BRIGADA</a></li>
@endsection
@section('titulo1')
  <li class="breadcrumb-item"><a href="{{route('brigadas.index')}}">BRIGADA</a></li>
@endsection


@section('content')
<form action="{{ route('brigadas.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf
 
        <!-- Datos de la brigada -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de la brigada</h3>
    
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Título Principal</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Título Principal...." value="{{ old('title') }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo..." value="{{ old('name') }}">
                    </div>
                  </div> 
                  <div class="col-md-6">  
                    <div class="form-group">
                      <label for="cellular">Celular</label>
                      <input type="number" name="cellular" class="form-control" id="cellular" placeholder="Celular...." value="{{ old('cellular') }}">
                    </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="number" name="phone" class="form-control" id="phone" placeholder="Teléfono...." value="{{ old('phone') }}">
                    </div> 
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="ext">Extensión</label>
                      <input type="number" name="ext" class="form-control" id="ext" placeholder="Teléfono...." value="{{ old('phone') }}">
                    </div> 
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cargo">Cargo</label>
                      <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo..." value="{{ old('name') }}">
                    </div>  
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Nombre Completo</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo..." value="{{ old('name') }}">
                    </div> 
                  </div>            
                  
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de los datos de la brigada
              </div>
            </div>
            <!-- /.card -->
    
    
          </div><!-- /.container-fluid -->
        </section>
        <!-- Datos de las amenazas -->

 
        <!-- Imagenes -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Imágenes de las personas que pertenecen de la brigada</h3>
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
              <!-- /.card-body -->
              <div class="card-footer">
                Selección de las imágenes de las personas que pertenecen de la brigada
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Imagenes -->
    
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Administración</h3>
              </div>
              <div class="card-body">   
                <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a class="btn btn-danger" href="{{ route('brigadas.index') }}">Cancelar</a>
                            <input    
                            :disabled = "deshabilitar_boton==1"
                                          
                            type="submit" value="Guardar" class="btn btn-primary">
                          
                          </div>
                        </div>
                        <!-- /.col -->  
                </div>
              </div>    
         </div><!-- /.container-fluid -->
     
 </form>

   

@endsection    