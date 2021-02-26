@extends('admin.layouts.master')

@section('title') Puerto Cisnes Informa @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Puerto Varas Informa</a>
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
                    <a href="{{ route('informations.create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Nueva Información</a>
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
                                <th>URL</th>
                                <th>¿Es un afiche?</th>
                                <th>Órden</th>
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

    {!! Form::open(['url' => '/admin/informations/is-poster', 'method' => 'POST', 'id' => 'is-poster']) !!}
        <input id="id_is_poster" type="hidden" name="id_is_poster" value="0">
    {!! Form::close() !!}

    {!! Form::open(['url' => '/admin/informations/poster_order', 'method' => 'POST', 'id' => 'poster-order']) !!}
        <input id="id_poster_order" type="hidden" name="id_poster_order" value="0">
        <input id="input_poster_order" type="hidden" name="input_poster_order" value="0">
    {!! Form::close() !!}
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
                        return "<img style=\"width: 100px\" class=\"img-thumbnail\" src=\"/uploads/informations/" + data + "\" height=\"50\"/>";
                    }, 'orderable': false, 'searchable': false},
                    {data: 'title', name: 'title', 'orderable': true, 'searchable': true},
                    {data: 'url', name: 'url', 'orderable': true, 'searchable': true},
                    {data: 'is_poster', name: 'is_poster', 'orderable': false, 'searchable': false},
                    {data: 'poster_order', name: 'poster_order', 'orderable': false, 'searchable': false},
                    {data: 'edit', name: 'edit', 'orderable': false, 'searchable': false},
                    {data: 'destroy', name: 'destroy', 'orderable': false, 'searchable': false}
                ],
                ajax: {
                    url: '{{ url('/admin/datatables/informations') }}'
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
                    window.location.href = '/admin/informations/' + id + '/delete';
                }
            });

            $('#table tbody').on('click', "input[type='checkbox']", function () {
                var id = $(this).data('id');
                var form = $('#is-poster');
                $('#id_is_poster').val(id);
                form.submit();
            });

            $('#table tbody').on('change', 'select', function () {
                var id = $(this).data('id');
                var form = $('#poster-order');
                $('#input_poster_order').val($(this).val());
                $('#id_poster_order').val(id);
                form.submit();
            });
        });
    </script>
@endsection