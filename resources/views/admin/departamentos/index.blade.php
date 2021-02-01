@extends('layouts.panel')

@section('title', 'departamentos')

@section('content')
<section class="content">
    <div class="container-fuid">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h4 class="m-0 text-dark">Sección de Departamentos</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Departamentos</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
        
        <div class="card card-success card-outline">
            <div class="card-body">
                @if(session('Mensaje'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Operación Exitosa </strong>{{ session('Mensaje') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <h4 class="text-muted font-weight-normal">Registro de Departamentos</h4>
                <form action="{{ route('departamentos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Portada</label>
                                <input type="file" name="imagen" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" id="" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end align-items-center">
                        <button type="submit" class="btn btn-flat btn-success btn-sm mr-1">Guardar <i class="fas fa-save"></i></button>
                        <button type="reset" class="btn btn-flat btn-info btn-sm">Limpiar <i class="fas fa-eraser"></i></button>
                    </div>
                </form>
                <hr>
                <h4 class="text-muted font-weight-normal">Listado de Banners</h4>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Estado</th>
                            <th>Creado</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deps as $d)
                        <tr>
                            <td><img src="{{ $d->imagen }}" alt="{{ $d->titulo }}" width="50"></td>
                            <td>{{ $d->titulo }}</td>
                            <td>{{ $d->status }}</td>
                            <td>{{ $d->created_at }}</td>
                            <td><a href="" class="btn btn-flat btn-secondary btn-sm"><i class="fas fa-eye"></i></a></td>
                            <td>
                                <form action="{{ route('departamentos.destroy', $d->idDepartamento) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-flat btn-danger btn-sm mr-1"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td><a href="" class="btn btn-flat btn-info btn-sm"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> 
@endsection