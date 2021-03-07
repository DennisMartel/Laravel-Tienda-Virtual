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
            <form enctype="multipart/form-data" method="POST" action="{{ url('guardarProducto') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" name="sku" id="sku" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Precio">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" placeholder="0.00" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Marca">Marca</label>
                        <select name="marca" id="marca" class="form-control select2" required>
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->idMarca }}">{{ $marca->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Departamento">Departamento</label>
                        <select name="departamentoId" id="departamentoId" class="form-control select2" required>
                            <option value="0" disabled="true" selected="true">Elige un departamento</option>
                            @foreach($departamentos as $departamento)
                                <option value="{{ $departamento->idDepartamento }}">{{ $departamento->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Marca">Categoria</label>
                        <select name="categoriaId" id="categoriaId" name="categoriaId" class="form-control select2" required>
                            <option value="0" disabled="true" selected="true">Elige una categoria</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Departamento">Subcategoria</label>
                        <select name="subCategoriaId" id="subCategoriaId" class="form-control select2" required>
                            <option value="0" disabled="true" selected="true">Elige una subcategoria</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Imagen">Imagenes del producto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="imagenes[]" multiple class="custom-file-input" id="file" required data-browser="Subir imagenes" multiple>
                            <label class="custom-file-label" for="exampleInputFile">Ningún archivo seleccionado</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Detalles">Detalles</label>
                        <textarea name="detalles" id="detalles" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="field_wrapper">
                    <div class="d-flex flow-row align-items-center">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="Imagen">Imagen stock</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="imagen[]" class="custom-file-input" id="file" required data-browser="Subir imagenes" multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Seleccionar imagen</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Descripcion">Barra color</label>
                                <input type="color" name="codigoColor[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Detalles">Color</label>
                                <input type="text" name="color[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Detalles">Talla</label>
                                <input type="text" name="talla[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="Detalles">Unidades</label>
                                <input type="text" name="unidadesDisponibles[]" id="" class="form-control">
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ asset('img/iconos/iconoMas.jpg') }}" width="40" style="border-radius: 50%;"/></a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
          $('#departamentoId').on('change', function() {
              var value = $(this).val();
              var url = "{{ url('seleccionarCategoria') }}"+"/"+value;
              $.ajax({
                type: 'GET',
                url: url,
                success:function(response) {
                    $('#categoriaId').empty();
                    $('#subCategoriaId').empty();
                    $('#categoriaId').append(`<option value="0" disabled selected="true">selecciona una categoria</option>`)
                    response.data.forEach(response => {
                        $('#subCategoriaId').append(`<option value="0" disabled="true" selected="true">Elige una subcategoria</option>`);
                        $('#categoriaId').append(`<option value="${response.idCategoria}">${response.titulo}</option>`)
                    })
                },
                error:function(error) {
                  console.error(error);
                }
              })
          });

          $('#categoriaId').on('change', function() {
              var value = $(this).val();
              var url = "{{ url('seleccionarSubCategoria') }}"+"/"+value;
              $.ajax({
                type: 'GET',
                url: url,
                success:function(response) {
                    $('#subCategoriaId').empty();
                    response.data.forEach(response => {
                        $('#subCategoriaId').append(`<option value="${response.idCategoria}">${response.titulo}</option>`)
                    })
                },
                error:function(error) {
                  console.error(error);
                }
              })
          });

            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = `<div class="d-flex flex-row align-items-center"><div class="row">
                            <div class="form-group col-md-4">
                                <label for="Imagen">Imagen stock</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="imagen[]" class="custom-file-input" id="file" required data-browser="Subir imagenes" multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Seleccionar imagen</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Descripcion">Barra color</label>
                                <input type="color" name="codigoColor[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Detalles">Color</label>
                                <input type="text" name="color[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Detalles">Talla</label>
                                <input type="text" name="talla[]" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="Detalles">Unidades</label>
                                <input type="text" name="unidadesDisponibles[]" id="" class="form-control">
                            </div>
                        </div>
                        <a href="javascript:void(0);"class="remove_button" title="Remove field"><img src="{{ asset("img/iconos/iconoMenos.jpg") }}" width="35" style="border-radius: 50%; padding-left: 7px;"/></a></div>`; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
      </script>
@endsection
