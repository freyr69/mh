@extends('app')

@section('content')

    <div class="block-header">
        <h2>Timers</h2>
        <ul class="actions">
            <li><a href="{{route('dom.timer.create')}}"><i class="zmdi zmdi-plus"></i></a></li>
        </ul>
    </div>

    <div class="card">
        <div class="listview lv-bordered lv-lg">
            @if (!$timers->count())
                <div class="lv-header-alt">
                    <h2>No timers have been configured.</h2>
                </div>
            @else
                <div class="lv-body">
                @foreach($timers as $timer)
                    <div class="lv-item media">
                        <div class="media-body">
                            <div clas="lv-title">{{ $timer->name }} - {{ $timer->duration->diffForHumans() }}
                            @if ($timer->sub_visible)
                                <span class="label label-default">Visible</span>
                            @endif
                            </div>
                            <small class="lv-small">{{ $timer->description }}</small>
                            <div class="lv-actions actions dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>{!! link_to_route('dom.timer.reset', 'Reset', array($timer->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.timer.edit', 'Edit', array($timer->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.timer.destroy', 'Delete', array($timer->id), array()) !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            @endif
        </div>
    </div>


@endsection
