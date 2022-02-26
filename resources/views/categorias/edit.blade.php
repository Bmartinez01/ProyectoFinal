@extends('layouts.main', ['activePage' => 'categorias', 'titlePage' => 'Editar Categoria'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('categorias.update', $categoria->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Categoria</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="documento" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre',$categoria->nombre) }}"  autofocus> 
                                    @if ($errors->has('nombre'))
                                    <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                    @endif                                    
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="estado" id="estado">

                                            @if($categoria->estado==1)

                                        
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</<option>

                                            @else
                                        
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</<option>

                                        @endif
                                    
                                    </select>
                                </div>
                            </div>   
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-facebook">Actualizar</button>
                            <div class="card-footer ml-auto mr-auto">
                            <a href="{{route('categorias.index')}}" class="btn btn-danger ">Cancelar</a>
                        </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection