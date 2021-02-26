<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Videos recientes</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($videos->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                    <tr class="bg-light">
                        <th>Link</th>
                        <th>Título</th>
                        <th>Activo</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td class="text-left">{{ $video->url }}</td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->active }}</td>
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