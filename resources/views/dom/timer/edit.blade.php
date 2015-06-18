@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Edit Timer</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model($timer, ['method' => 'PATCH', 'route' => ['dom.timer.update', $timer->id]]) !!}
            @include('dom/timer/partials/_form', ['submit_text' => 'Edit Timer'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
