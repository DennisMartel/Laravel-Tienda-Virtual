@extends('layouts.panel')

@section('title', 'Departamentos')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Departamentos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Departamentos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h3 class="card-title">Listado de Departamentos</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
                            Crear Departamento
                        </button>

                        {{-- Modal Agregar Departamentos --}}
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Departamento</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- form start -->
                                    <form role="form" action="{{ route('departamentos.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Imagen">Imagen</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile" data-browser="Elegir archivo">
                                                <label class="custom-file-label" for="exampleInputFile">Ningún archivo seleccionado</label>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label>Titulo</label>
                                          <input type="text" name="titulo" class="form-control" placeholder="Ingresar titulo">
                                        </div>
                                        <div class="form-group">
                                          <label>Mostrar en menu</label>
                                          <select name="status" class="form-control">
                                              <option value="0">si</option>
                                              <option value="1">No</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning">Guardar</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Portada</th>
                                <th>Titulo</th>
                                <th>Estado</th>
                                <th>Fecha/Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departamentos as $departamento)
                                <tr>
                                    <td><img src="{{ $departamento->imagen }}" alt="{{ $departamento->titulo }}" width="50"></td>
                                    <td>{{ $departamento->titulo }}</td>
                                    <td>@if($departamento->status == 0)<span class="badge badge-success">Activo</span>@else<span class="badge badge-danger">Inactivo</span>@endif</td>
                                    <td>{{ $departamento->created_at }}</td>
                                    <td>
                                        <form action="{{ route('departamentos.destroy', $departamento->idDepartamento) }}" class="formulario-eliminar" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-flat btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
