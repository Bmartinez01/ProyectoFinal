@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.update', $user->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Usuarios</h4>
                            <p class="card-category">Actualizar datos</p>
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
                                <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                                @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="col-sm-2 col-form-label control-label asterisco">Email</label>
                            <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            @if ($errors->has('email'))
                            <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="password" class="col-sm-2 col-form-label control-label asterisco">Contraseña</label>
                            <div class="col-sm-7">
                            <input type="password" class="form-control" name="password" placeholder="ingrese contraseña si desea modificarla">
                            @if ($errors->has('apellido'))
                            <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="estado" id="estado">

                                    @if($user->estado==1)

                                </option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</<option>

                                    @else
                                </option>
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</<option>

                                @endif
                            {{-- </option>
                                <option value="0">Inactivo</<option>
                                <option value="1">Activo</option>
                             --}}
                            </select>
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
