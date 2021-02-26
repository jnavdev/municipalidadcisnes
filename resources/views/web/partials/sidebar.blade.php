@php
    $miniEvents = App\Models\Event::orderBy('date', 'ASC')->where('date', '>=', Carbon\Carbon::now()->toDateString())->take(3)->get();
@endphp

<div class="col-sm-4">
    @if ($miniEvents->count() > 0)
        <div class="sidebar">
            <div class="widget tab-posts-widget">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a href="#" data-toggle="tab">Eventos</a>
                    </li>
                    <li>
                        <a href="{{ url('/eventos') }}">Ver más</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="option1">
                        <ul class="list-posts">
                            @foreach ($miniEvents as $event)
                                <li>
                                    <a href="#modal{{ $event->id }}"><p class="calendar">{{ date('d', strtotime($event->date)) }} <em>{{ trans('months.month.' . date('F', strtotime($event->date))), 0, 3 }}</em></p></a>
                                    <div class="post-content">
                                        <h2><a href="#modal{{ $event->id }}">{{ $event->title }}</a></h2>
                                        <br>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"> {{ date('d', strtotime($event->date)) }} de {{ trans('months.month.' . date('F', strtotime($event->date))) }}, {{ date('Y', strtotime($event->date)) }}</i></li>
                                        </ul>
                                    </div>
                                </li>
                                <div class="remodal" data-remodal-id="modal{{ $event->id }}">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    <h3>{{ $event->title }}</h3>
                                    <p><img class="img-responsive" src="{{ asset('uploads/events/' . $event->image) }}" alt=""></p>
                                    <br>
                                    <p><strong>Fecha del evento: </strong>{{ date('d', strtotime($event->date)) }} de {{ trans('months.month.' . date('F', strtotime($event->date))) }}, {{ date('Y', strtotime($event->date)) }}</p>
                                    <br>
                                    <button data-remodal-action="cancel" class="btn btn-md btn-info">Cerrar</button>
                                </div>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
        <div class="sidebar">
            <div class="widget social-widget">
                <div class="title-section">
                    <h1><span>Redes Sociales</span></h1>
                </div>
                <ul class="social-share">
                    <a class="twitter-timeline" data-lang="es" data-width="400" data-height="400" data-dnt="true" href="https://twitter.com/municisnes">Tweets by municisnes</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </ul>
            </div>
        </div>
</div>
