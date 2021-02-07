@extends('layouts.panel')

@section('title', 'Categorias')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title">Listado de categorias</h3>
                <!-- Button trigger modal -->
                <a href="{{ route('categorias.create') }}" class="btn btn-flat float-right text-white" style="background: #545bc4;">
                    Agregar Nueva Categoria
                </a>   
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
                    @foreach($categorias as $categorias)
                        <tr>
                            <td><img src="{{ $categorias->imagen }}" alt="{{ $categorias->titulo }}" width="50"></td>
                            <td>{{ $categorias->titulo }}</td>
                            <td>@if($categorias->status == 0)<span class="badge badge-success">Activo</span>@else<span class="badge badge-danger">Inactivo</span>@endif</td>
                            <td>{{ $categorias->created_at }}</td>
                            <td>
                                <form action="{{ route('categorias.destroy', $categorias->idCategoria) }}" class="formulario-eliminar" method="post">
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