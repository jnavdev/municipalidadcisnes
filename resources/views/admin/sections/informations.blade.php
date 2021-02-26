<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Últimos artículos de Cisnes Informa</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($informations->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th>Imágen</th>
                            <th>Título</th>
                            <th>URL</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($informations as $information)
                            <tr>
                                <td>
                                    <div class="text-left">
                                        <img src="{{ asset('uploads/informations/' . $information->image) }}" alt="{{ $information->title }}" class="img-thumbnail" style="width: 100px;">
                                    </div>
                                </td>
                                <td>{{ $information->title }}</td>
                                <td>
                                    @if ($information->url != null)
                                        {{ $information->url }}
                                    @else
                                        No posee URL
                                    @endif
                                </td>
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