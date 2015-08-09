@extends('app')

@section('content')

<div class="block-header">
    <h2>Confessions</h2>
</div>

    <div class="card">
        <div class="listview lv-bordered lv-lg">
            @if (!$confessions->count())
                <div class="lv-header-alt">
                    <h2>No confessions have been reported.</h2>
                </div>
            @else
                <div class="lv-body">
                @foreach($confessions as $confession)
                    <div class="lv-item media">
                        <div class="media-body">
                            <div clas="lv-title">
                                {{ $confession->created_at }}
                                @if ($confession->confirmed)
                                <span class="label label-default">Confirmed</span>
                                @else
                                <span class="label label-warning">Unconfirmed</span>
                                @endif
                            </div>
                            <small class="lv-small">{{ $confession->description }}</small>
                            <div class="lv-actions actions dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>{!! link_to_route('dom.confession.edit', 'Edit', array($confession->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.confession.destroy', 'Delete', array($confession->id), array()) !!}</li>
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
