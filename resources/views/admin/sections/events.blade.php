<div class="panel">
    <div class="panel-menu p12 admin-form theme-primary">
        <div class="row text-center">
            <h4>Eventos recientes</h4>
        </div>
    </div>
    <div class="panel-body pn">
        @if ($events->count() > 0)
            <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th>Imágen</th>
                            <th>Título</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>
                                    <div class="text-left">
                                        <img src="{{ asset('uploads/events/' . $event->image) }}" alt="{{ $event->title }}" class="img-thumbnail" style="width: 100px;">
                                    </div>
                                </td>
                                <td>{{ $event->title }}</td>
                                <td>{{ date('d-m-Y', strtotime($event->date)) }}</td>
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