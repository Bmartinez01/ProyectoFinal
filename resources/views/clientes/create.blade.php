@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Agregar Cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('clientes.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Cliente</h4>
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
                                    <label for="documento" class="col-sm-2 col-form-label control-label asterisco">Documento</label>
                                    <div class="col-sm-7">
                                    <input type="number" class="form-control" name="documento" placeholder="Ingrese su documento" value="{{old('documento')}}" autofocus>
                                    @if ($errors->has('documento'))
                                    <span class="error text-danger" for="input-documento">{{ $errors->first('documento') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label control-label asterisco">Nombre</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="{{old('nombre')}}">
                                @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="apellido" class="col-sm-2 col-form-label control-label asterisco">Apellido</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" value="{{old('apellido')}}">
                            @if ($errors->has('apellido'))
                            <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label for="direccion" class="col-sm-2 col-form-label control-label asterisco">Dirección</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion" value="{{old('direccion')}}">
                        @if ($errors->has('direccion'))
                        <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="telefono" class="col-sm-2 col-form-label control-label asterisco">Celular</label>
                    <div class="col-sm-7">
                    <input type="number" class="form-control" name="telefono" placeholder="Numero celular" value="{{old('telefono')}}">
                    @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
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
    </div>
    <div class="card-footer ml-auto mr-auto col-md-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <div class="">
            <a href="{{route('clientes.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
