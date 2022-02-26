@extends('layouts.main', ['activePage' => 'categorias', 'titlePage' => 'Categorias'])
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" >
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-title text-dark"><strong>Categorias</strong></h4>
                                    <p class="card-category text-dark">Categorias Registradas</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success')}}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right mb-3">
                                            <a href="{{  route('categorias.create') }}" class="btn btn-sm btn-facebook">Agregar Categoria</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive ">
                                        <table  id="categorias" class="table table-striped table-bordered shadow-lg mt-4 mx-auto " style="width:90%">
                                            <thead class="text-white bg-primary ">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th >Funciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($categorias as $categoria)
                                                    <tr>
                                                        <td>{{ $categoria->id }}</td>
                                                        <td>{{ $categoria->nombre }}</td>
                                                        <td class="td-actions text-left">
                                                        @if ($categoria->estado==1)
                                                        <button type="button" class="btn btn-success btn-sm">
                                                            Activo
                                                        </button>

                                                        @else
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            Inactivo
                                                        </button>

                                                        @endif
                                                    </td>
                                                        <td class="td-actions ">
                                                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i></a>
                                                        </td>
                                                    </tr>
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
    $('#categorias').DataTable( {
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

