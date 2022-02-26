@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Clientes'])
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" >
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title text-dark">Clientes</h4>
                                <p class="card-category text-dark">Clientes Registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                               <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('clientes.create')}}" class="btn btn-sm btn-facebook">Agregar Cliente</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table  id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="text-white bg-primary">

                                            <th>Documento</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Email</th>
                                            <th>Estado</th>
                                            <th class="text-right">Funciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientes as $cliente)


                                            <tr>

                                                <td>{{ $cliente->documento }}</td>
                                                <td>{{ $cliente->nombre }}</td>
                                                <td>{{ $cliente->apellido }}</td>
                                                <td>{{ $cliente->direccion }}</td>
                                                <td>{{ $cliente->telefono }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td class="td-actions text-right">
                                                @if ($cliente->estado==1)
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
                                                 <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                    class="btn btn-warning"><i class="material-icons">edit</i></a>

                                               </td>

                                            </tr>
                                            <!-- javascript init -->

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @section('script')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#clientes').DataTable( {
            "language": {
                "lengthMenu": "Mostrar  _MENU_  registros por pagina",
                "zeroRecords": "No se encontraron datos",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar: ",
                "paginate": {
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        } );
    } );
    </script>
    @endsection

@endsection
