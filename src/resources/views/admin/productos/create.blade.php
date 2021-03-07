@extends('layouts.panel')

@section('title', 'Productos')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Ingreso de productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <div class="card card-info card-outline">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Precio">Precio</label>
                        <input type="text" class="form-control" id="precio" placeholder="0.00">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Marca">Marca</label>
                        <select name="marca" id="marca" class="form-control select2">
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->idMarca }}">{{ $marca->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Departamento">Departamento</label>
                        <select name="departamentoId" id="departamentoId" class="form-control select2">
                            @foreach($departamentos as $departamento)
                                <option value="{{ $departamento->idDepartamento }}">{{ $departamento->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Marca">Categoria</label>
                        <select name="categoriaId" id="categoriaId" class="form-control select2">
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->idMarca }}">{{ $marca->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Departamento">Subcategoria</label>
                        <select name="subCategoriaId" id="subCategoriaId" class="form-control select2">
                            @foreach($departamentos as $departamento)
                                <option value="{{ $departamento->idDepartamento }}">{{ $departamento->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Detalles">Detalles</label>
                        <textarea name="detalles" id="detalles" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
