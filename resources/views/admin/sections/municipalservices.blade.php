<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Servicios Municipales Recientes</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($municipalServices->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th>Imágen</th>
                            <th>Título</th>
                            <th>Contenido</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($municipalServices as $municipalService)
                            <tr>
                                <td>
                                    <div class="text-left">
                                        <img src="{{ asset('uploads/municipalservices/' . $municipalService->image) }}" alt="{{ $municipalService->title }}" class="img-thumbnail" style="width: 100px;">
                                    </div>
                                </td>
                                <td>{{ $municipalService->title }}</td>
                                <td>{{ substr(strip_tags($municipalService->body), 0, 100) }}[...]</td>
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