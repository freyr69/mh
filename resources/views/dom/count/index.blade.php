@extends('app')

@section('content')

<div class="block-header">
        <h2>Counters</h2>
        <ul class="actions">
            <li><a href="{{route('dom.count.create')}}"><i class="zmdi zmdi-plus"></i></a></li>
        </ul>
    </div>

    <div class="card">
        <div class="listview lv-bordered lv-lg">
            @if (!$counts->count())
                <div class="lv-header-alt">
                    <h2>No punishments have been configured.</h2>
                </div>
            @else
                <div class="lv-body">
                @foreach($counts as $count)
                    <div class="lv-item media">
                        <div class="media-block">
                            {{ $count->count }}
                        </div>
                        <div class="media-body">
                            <div clas="lv-title">
                                {{ $count->name }}
                                @if ($count->sub_visible)
                                <span class="label label-default">Visible</span>
                                @endif
                            </div>
                            <small class="lv-small">{{ $count->description }}</small>
                            <div class="lv-actions actions dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>{!! link_to_route('dom.count.increment', 'Increment', array($count->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.count.decrement', 'Decrement', array($count->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.count.reset', 'Reset', array($count->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.count.edit', 'Edit', array($count->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.count.destroy', 'Delete', array($count->id), array()) !!}</li>
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
