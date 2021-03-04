@extends('layouts.app')

@section('content')
{{-- <div class="row justify-content-center" style="margin-top: 155px;">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto border border-primary" style="max-width:520px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Registrarme</h4></header>
            <form>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Nombres</label>
                              <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Apellidos</label>
                              <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                          <span class="custom-control-label"> Hombre </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="gender" value="option2">
                          <span class="custom-control-label"> Mujer </span>
                        </label>
                    </div> <!-- form-group end.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Departamento</label>
                          <select id="inputState" class="form-control">
                                <option>Elige tu departamento</option>
                                <option>Ahuachapán</option>
                                <option>Sonsonate</option>
                                <option>La Libertad</option>
                                <option>La Union</option>
                                <option>San Salvador</option>
                          </select>
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Municipio</label>
                            <select id="inputState" class="form-control">
                                <option>Elige tu Municipio</option>
                            </select>
                          </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Crear Contraseña</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// --> 
                        <div class="form-group col-md-6">
                            <label>Confirmar Contraseña</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// -->  
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Registrarme  </button>
                    </div> <!-- form-group// -->      
                    <div class="form-group"> 
                        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"> 
                            <div class="custom-control-label"> Acepto todos los <a href="#">términos y condiciones</a>  </div> 
                        </label>
                    </div> <!-- form-group end.// -->           
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Ya tengo una cuenta? <a href="{{ url('login') }}">Iniciar Sesión</a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    
    
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
@endsection
