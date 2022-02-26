    @extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Agregar Usuario'])
    @section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.index')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                                <div class="card-body">
                                    {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif --}}

                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label control-label asterisco">Nombre</label>
                                    <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}">
                                    @if ($errors->has('nombre'))
                                    <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label control-label asterisco">Email</label>
                                <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" placeholder="Ingrese su email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label control-label asterisco">Contraseña</label>
                                <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="Ingrese su Contraseña" value="">
                                @if ($errors->has('apellido'))
                                <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto col-md-3">
                            <button type="submit" class="btn btn-facebook">Enviar</button>
                            <div class="">
                                <a href="{{route('users.index')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
