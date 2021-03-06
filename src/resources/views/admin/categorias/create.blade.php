@extends('layouts.panel')

@section('title', 'Crear Banner')

@section('content')
<div class="card card-primary">
    <div class="card-header" style="background: #545bc4;">
      <h3 class="card-title">Nueva Categoria</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="Imagen">Imagen</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Ningún archivo seleccionado</label>
              </div>
            </div>
          </div>
        <div class="form-group">
          <label>Titulo</label>
          <input type="text" name="titulo" class="form-control" placeholder="Ingresar titulo">
        </div>
        <div class="form-group">
            <label>Elige el departamento</label>
            <select name="idDepartamento" class="form-control select2" style="width: 100%;">
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->idDepartamento }}">{{ $departamento->titulo }}</option>
                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label>Mostrar en menu</label>
          <select name="status" class="form-control">
              <option value="0">Si</option>
              <option value="1">No</option>
          </select>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-flat text-white float-right" style="background: #545bc4;">Submit</button>
      </div>
    </form>
  </div>
@endsection