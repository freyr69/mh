@extends('app')

@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2 class="subheader">Add Timer</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            {!! Form::model(new Mistress\Timer, ['route' => ['dom.timer.store']]) !!}
            @include('dom/timer/partials/_form', ['submit_text' => 'Create Timer'])
            {!! Form::close() !!}

        </div>
    </div>


@endsection
