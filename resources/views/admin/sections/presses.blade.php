<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Últimos artículos de Cisnes en la Prensa</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($presses->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                    <tr class="bg-light">
                        <th>Imágen</th>
                        <th>Fecha</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($presses as $press)
                        <tr>
                            <td>
                                <div class="text-left">
                                    <img src="{{ asset('uploads/presses/' . $press->image) }}" alt="Prensa Puerto Varas {{ $press->image }}" class="img-thumbnail" style="width: 100px;">
                                </div>
                            </td>
                            <td>{{ date('d-m-Y', strtotime($press->date)) }}</td>
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