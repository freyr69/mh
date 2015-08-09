@extends('app')

@section('content')

    <div class="block-header">
        <h2>Rules</h2>
        <ul class="actions">
            <li><a href="{{route('dom.rule.create')}}"><i class="zmdi zmdi-plus"></i></a></li>
        </ul>
    </div>

    <div class="card">
        <div class="listview lv-bordered lv-lg">
            @if (!$rules->count())
                <div class="lv-header-alt">
                    <h2>No rules have been configured.</h2>
                </div>
            @else
                <div class="lv-body">
                @foreach($rules as $rule)
                    <div class="lv-item media">
                        <div class="media-body">
                            <div clas="lv-title">{{ $rule->title }}</div>
                            <small class="lv-small">{{ $rule->description }}</small>
                            <div class="lv-actions actions dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>{!! link_to_route('dom.rule.edit', 'Edit', array($rule->id), array()) !!}</li>
                                    <li>{!! link_to_route('dom.rule.destroy', 'Delete', array($rule->id), array()) !!}</li>
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
