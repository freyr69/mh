@extends('app')

@section('content')

    <div class="block-header">
        <h2>Punishments</h2>
        <ul class="actions">
            <li><a href="{{route('dom.assigned_punishment.create')}}"><i class="zmdi zmdi-plus"></i></a></li>
        </ul>
    </div>

    <div class="card">
        <div class="listview lv-bordered lv-lg">
            @if (!$punishments->count())
                <div class="lv-header-alt">
                    <h2>No punishments have been configured.</h2>
                </div>
            @else
                <div class="lv-body">
                @foreach($punishments as $punishment)
                    <div class="lv-item media">
                        <div class="media-body">
                            <div clas="lv-title">{{ $punishment->name }}  <span class="label label-primary">{{ $punishment->severity + 1 }}</span></div>
                            @if ($punishment->complete)
                            <small class="lv-small">
                                <span class="label label-success">Complete</span>
                            </small>
                            @endif
                            <small class="lv-small">{{ $punishment->description }}</small>
                            <small class="lv-small"><strong>Assigned:  </strong>{{ $punishment->assigned_on }}</small>
                            @if ($punishment->complete)
                            <small class="lv-small">
                                <small class="lv-small"><strong>Completed:  </strong>{{ $punishment->completed_on }}</small>
                            </small>
                            @endif
                            <small class="lv-small"><strong>Notes:  </strong>{{ $punishment->notes }}</small>
                            <div class="lv-actions actions dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @unless ($punishment->complete)
                                    <li>{!! link_to_route('dom.assigned_punishment.complete', 'Complete', array($punishment->id), array()) !!}</li>
                                    @endunless
                                    <li>{!! link_to_route('dom.assigned_punishment.edit', 'Edit', array($punishment->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.assigned_punishment.destroy', 'Delete', array($punishment->id), array()) !!}</li>
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
