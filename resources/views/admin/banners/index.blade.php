@extends('layouts.panel')

@section('title', 'Banner')

@section('content')
<div class="row">
    <div class="col-12">
        @if(session('Mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Operción exitosa!</strong> {{ session('Mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title">Listado de Banners</h3>
                <!-- Button trigger modal -->
                <a href="{{ route('banner.create') }}" class="btn btn-flat float-right text-white" style="background: #545bc4;">
                    Agregar Nuevo Banner
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
                    @foreach($banners as $banner)
                        <tr>
                            <td><img src="{{ $banner->imagen }}" alt="{{ $banner->titulo }}" width="100"></td>
                            <td>{{ $banner->titulo }}</td>
                            <td>@if($banner->status == 0)<span class="badge badge-success">Activo</span>@else<span class="badge badge-danger">Inactivo</span>@endif</td>
                            <td>{{ $banner->created_at }}</td>
                            <td>
                                <form action="{{ route('banner.destroy', $banner->idBanner) }}" class="formulario-eliminar" method="post">
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