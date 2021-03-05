@extends('layouts.panel')

@section('title', 'Banner')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Banners</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Banners</li>
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
                        <h3 class="card-title">Listado de Banners</h3>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
                            Crear Banner
                        </button>

                        {{-- Modal Agregar Banner --}}
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Crear Nuevo Banner</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="{{ route('banner.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="Imagen">Imagen</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="imagen" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Ningún
                                                            archivo seleccionado</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <input type="text" name="titulo" class="form-control"
                                                    placeholder="Ingresar titulo">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion (Opcional)</label>
                                                <textarea name="descripcion" class="form-control"
                                                    placeholder="Ingresar una descripcion"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Enlace</label>
                                                <input type="text" name="url" class="form-control"
                                                    placeholder="Ingresar un enlace">
                                            </div>

                                            <div class="form-group">
                                                <label>Seleciona una opción</label>
                                                <select name="posicion" class="form-control">
                                                    <option value="1">Banner</option>
                                                    <option value="2">Anuncio publicitario</option>
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
                            @foreach ($banners as $banner)
                                <tr>
                                    <td><img src="{{ $banner->imagen }}" alt="{{ $banner->titulo }}" width="100"></td>
                                    <td>{{ $banner->titulo }}</td>
                                    <td>
                                        @if ($banner->status == 0)<span
                                            class="badge badge-success">Activo</span>@else<span
                                                class="badge badge-danger">Inactivo</span>@endif
                                    </td>
                                    <td>{{ $banner->created_at }}</td>
                                    <td>
                                        <form action="{{ route('banner.destroy', $banner->idBanner) }}"
                                            class="formulario-eliminar" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i></button>
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
