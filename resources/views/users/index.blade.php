@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Usuarios Registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                               <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('users.create')}}" class="btn btn-sm btn-facebook">Agregar Usuario</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">


                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Fecha</th>
                                            <th>Estado</th>
                                            <th class="text-right">Funciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $users)
                                            <tr>

                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->created_at }}</td>

                                                <td class="td-actions text-right">
                                                @if ($users->estado==1)
                                                <button type="button" class="btn btn-success btn-sm">
                                                    Activo
                                                </button>

                                                @else
                                                 <button type="button" class="btn btn-danger btn-sm">
                                                    Inactivo
                                                </button>

                                                @endif
                                               </td>
                                               <td class="td-actions text-right">
                                                 <a href="{{route('users.edit', $users->id)}}"
                                                    class="btn btn-warning"><i class="material-icons">edit</i></a>

                                               </td>

                                            </tr>
                                            <!-- javascript init -->

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer mr-auto">
                                {{$userS->links()}}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
