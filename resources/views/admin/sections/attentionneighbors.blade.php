<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Atención al Vecino</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($attentionNeighbors->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th>Motivo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo electrónico</th>
                            <th>Archivo</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($attentionNeighbors as $attentionNeighbor)
                        <tr>
                            <td>{{ $attentionNeighbor->reason }}</td>
                            <td>{{ $attentionNeighbor->names }}</td>
                            <td>{{ $attentionNeighbor->surnames }}</td>
                            <td>{{ $attentionNeighbor->email }}</td>
                            <td><a class="btn btn-primary" href="{{ $attentionNeighbor->getFile() }}" download><i class="fa fa-download"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center">
                <h5>Sin registros actualmente!</h5>
            </div>
        @endif
    </div>
</div>