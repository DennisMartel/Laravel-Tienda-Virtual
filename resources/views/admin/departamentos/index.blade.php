@extends('layouts.panel')

@section('title', 'Departamentos')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title">Listado de Departamentos</h3>
                <!-- Button trigger modal -->
                <a href="{{ route('departamentos.create') }}" class="btn btn-flat float-right text-white" style="background: #545bc4;">
                    Agregar Nuevo Departamento
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