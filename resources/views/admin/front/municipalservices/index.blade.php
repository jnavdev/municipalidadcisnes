@extends('admin.layouts.master')

@section('title') Banner @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Servicios Municipales</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="panel-menu p12 admin-form theme-primary">
                <div class="row">
                    <a href="{{ route('municipalservices.create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo Servicio Municipal</a>
                </div>
            </div>
            <div class="panel-body pn">
                @include('admin.partials.message')
                <div class="table-responsive">
                    <table id="table" class="table admin-form theme-warning tc-checkbox-1 fs13">
                        <thead>
                            <tr class="bg-light">
                                <th>Imágen</th>
                                <th>Título</th>
                                <th>Contenido</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // AJAX load
            table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                columns: [
                    {data: 'image', name: 'image', 'render': function (data, type, full, meta) {
                        return "<img style=\"width: 100px\" class=\"img-thumbnail\" src=\"/uploads/municipalservices/" + data + "\" height=\"50\"/>";
                    }, 'orderable': false, 'searchable': false},
                    {data: 'title', name: 'title', 'orderable': true, 'searchable': true},
                    {data: 'body', name: 'body', 'orderable': true, 'searchable': true},
                    {data: 'edit', name: 'edit', 'orderable': false, 'searchable': false},
                    {data: 'destroy', name: 'destroy', 'orderable': false, 'searchable': false}
                ],
                ajax: {
                    url: '{{ url('/admin/datatables/municipalservices') }}'
                },
                language: {
                    processing: "Procesando...",
                    lengthMenu: "Mostrar _MENU_ registros",
                    zeroRecords: "No se encontraron resultados",
                    emptyTable: "Ningún dato disponible en esta tabla",
                    info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                    infoFiltered: "(filtrado de un total de _MAX_ registros)",
                    url: "",
                    infoPostFix: "",
                    search: "Buscar:",
                    infoThousands: ",",
                    loadingRecords: "Cargando...",
                    paginate: {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    aria: {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });

            // Delete button
            $('#table tbody').on('click', 'button', function () {
                var id = $(this).data('id');

                if (confirm('¿Eliminar registro?')) {
                    window.location.href = '/admin/municipalservices/' + id + '/delete';
                }
            });
        });
    </script>
@endsection