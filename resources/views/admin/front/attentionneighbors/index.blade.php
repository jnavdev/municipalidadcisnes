@extends('admin.layouts.master')

@section('title') Noticias @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Atención al Vecino</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="panel-body pn">
                @include('admin.partials.message')
                <div class="table-responsive">
                    <table id="table" class="table admin-form theme-warning tc-checkbox-1 fs13">
                        <thead>
                        <tr class="bg-light">
                            <th>Motivo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo electrónico</th>
                            <th>Archivo</th>
                            <th>Detalle</th>
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
                    {data: 'reason', name: 'reason', 'orderable': true, 'searchable': true},
                    {data: 'names', name: 'names', 'orderable': true, 'searchable': true},
                    {data: 'surnames', name: 'surnames', 'orderable': true, 'searchable': true},
                    {data: 'email', name: 'email', 'orderable': true, 'searchable': true},
                    {data: 'file', name: 'file', 'orderable': false, 'searchable': false},
                    {data: 'show', name: 'show', 'orderable': false, 'searchable': false},
                    {data: 'destroy', name: 'destroy', 'orderable': false, 'searchable': false}
                ],
                ajax: {
                    url: '{{ url('/admin/datatables/attentionneighbors') }}'
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
                    window.location.href = '/admin/attentionneighbors/' + id + '/delete';
                }
            });
        });
    </script>
@endsection