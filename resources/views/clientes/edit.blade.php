@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Editar Cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('clientes.update', $cliente->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Cliente</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="documento" class="col-sm-2 col-form-label">Documento</label>
                                    <div class="col-sm-7">
                                    <input type="number" class="form-control" name="documento" readonly value="{{ old('documento', $cliente->documento)}}">
                                    @if ($errors->has('documento'))
                                    <span class="error text-danger" for="input-documento">{{ $errors->first('documento') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $cliente->nombre)}}" autofocus>
                                @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="apellido" value="{{ old('apellido', $cliente->apellido)}}">
                            @if ($errors->has('apellido'))
                            <span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $cliente->direccion)}}">
                        @if ($errors->has('direccion'))
                        <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="telefono" class="col-sm-2 col-form-label">Celular</label>
                    <div class="col-sm-7">
                    <input type="number" class="form-control" name="telefono" value="{{ old('telefono', $cliente->telefono)}}">
                    @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                <input type="email" class="form-control" name="email" value="{{ old('email', $cliente->email)}}">
                @if ($errors->has('email'))
                <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <label for="email" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-7">
                <select class="form-control" name="estado" id="estado">

                        @if($cliente->estado==1)


                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>

                        @else

                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                    @endif
                {{-- </option>
                    <option value="0">Inactivo</<option>
                    <option value="1">Activo</option>
                 --}}
                </select>
          </div>
        </div>
    <div class="card-footer ml-auto mr-auto col-md-4">
        <button type="submit" class="btn btn-success">Actualizar</button>
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

