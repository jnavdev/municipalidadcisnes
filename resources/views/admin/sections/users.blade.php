<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Usuarios recientes</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($users->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th>Fecha creación</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-left">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
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