<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Álbumes recientes</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($albums->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                    <tr class="bg-light">
                        <th>Imágen principal</th>
                        <th>Nombre</th>
                        <th class="text-right">Cantidad imágenes</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($albums as $album)
                        <tr>
                            <td>
                                <div class="text-left">
                                    <img src="{{ $album->getImage() }}" alt="{{ $album->name }}" class="img-thumbnail" style="width: 100px;">
                                </div>
                            </td>
                            <td>{{ $album->name }}</td>
                            <td class="text-right">{{ $album->images->count() }} imágenes</td>
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